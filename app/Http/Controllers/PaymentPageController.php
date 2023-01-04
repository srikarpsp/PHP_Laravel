<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormDataRequest;
use App\Models\PaymentPage;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentlist = PaymentPage::all();

//        dd($paymentlist);
        return view('Payment.PaymentPage', ['paymentlist' => $paymentlist, 'payment'=>'']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Payment = Payment::all();
        return view('Payment.PaymentPage',['Payment' => $Payment]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormDataRequest $request)
    {



        $payment = new PaymentPage([
            'FullName' =>$request->get('firstname'),
            'Email' => $request->get('email'),
            'Address' => $request->get('address'),
            'City'=> $request->get('city'),
            'State' => $request->get('state'),
            'Zip' => $request->get('zip'),
            'NameOnCard'=> $request->get('cardname'),
            'CreditCardNumber'=> $request->get('cardnumber'),
            'ExpMonth'=> $request->get('expmonth'),
            'ExpYear'=> $request->get('expyear'),
            'CVV'=> $request->get('cvv'),
        ]);
        $payment->save();
        $paymentlist = PaymentPage::all();
        return view('Payment.PaymentConfirmPage', ['paymentlist' => $paymentlist]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = PaymentPage::where('id',$id)->first();
//        dd($payment);
        return view('Payment.PaymentUpdatePage', ['payment' => $payment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $payment = PaymentPage::find($id);
      $payment->update($request->all());

        $paymentlist = PaymentPage::all();
        return view('Payment.PaymentConfirmPage', ['paymentlist' => $paymentlist]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PaymentPage::find($id)->delete();
        $paymentlist = PaymentPage::all();
        return view('Payment.PaymentConfirmPage', ['paymentlist' => $paymentlist]);
    }
}
