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
               'billId' => $invoice->AirBillNumber,
               'invoiceNumber' => $invoice->InvoiceNumber ?? 'NA',
               'shipper' => $invoice->Shipper ?? 'NA',
               'trackingNumber' => $invoice->TrackingNumber ?? 'NA',
               'description' => $invoice->Description ?? 'NA',
               'weight' => $invoice->Weight ?? 'NA',
               'value' => $invoice->Value ?? 'NA',
               'status' => $invoice->IsPaid ?? 'NA',
               'amount' => $invoice->TotalCharges ?? 'NA',
           ];
       }
       return $invoicesArray ?? [];
   }
}

