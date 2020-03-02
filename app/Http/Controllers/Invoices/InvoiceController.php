<?php

namespace App\Http\Controllers\Invoices;

use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
   public function get()
   {
       $user = auth()->user();
       $allInvoices = $this->getInvoicesQuery($user->id);
       $invoices['invoices'] = $this->formatAccount($allInvoices);
       $invoices['pendings'] = $this->getPendingInvoices($invoices['invoices']);
       $invoices['accountId'] = $user->id;
       return  view('invoice')->with($invoices);
   }

   private function getInvoicesQuery($userId)
   {
       return  \DB::table('invoice AS i')
           ->join('package AS p', 'p.AirwayBillNumber', '=', 'i.AirwayBillNumber')
           ->select('i.InvoiceId', 'i.AirwayBillNumber', 'i.InvoiceNumber', 'p.Shipper', 'p.TrackingNumber',
               'p.Description', 'p.Weight', 'p.Value', 'i.IsPaid', 'i.TotalCharges')
           ->where('p.AccountNumber', '=', $userId)
           ->get();
   }

   private function formatAccount($invoices): array
   {
       foreach ($invoices as $invoice) {

           $invoicesArray[] = [
               'id' => $invoice->InvoiceId,
               'billId' => $invoice->AirwayBillNumber,
               'invoiceNumber' => $invoice->InvoiceNumber ?? 'NA',
               'shipper' => $invoice->Shipper ?? 'NA',
               'trackingNumber' => $invoice->TrackingNumber ?? 'NA',
               'description' => $invoice->Description ?? 'NA',
               'weight' => $invoice->Weight ?? 'NA',
               'value' => $invoice->Value ?? 'NA',
               'status' => (int)$invoice->IsPaid === 1  ? 'Paid' : 'Pending',
               'amount' => $invoice->TotalCharges ?? 'NA',
           ];
       }
       return $invoicesArray ?? [];
   }

   private function getPendingInvoices($invoices): array
   {
        foreach ($invoices as $invoice) {
            if($invoice['status'] === 'Pending') {
                $pending[] = $invoice;
            }
        }
        return $pending ?? [];
    }
}

