<?php namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\FrontendController;
use App\Http\Models\Inquiry;
use Input;
use Redirect;
use Html;
use View;
use DB;
use Illuminate\Http\Request;
use Session;
use Validator;
use Mail;
use LaravelLocalization;

class InquiryController extends FrontendController
{
    /************************************************************************
    *Inquiry get input
    /************************************************************************/
    public function getInput()
    {
    	$class = 'active';
    	return view('frontend.inquiry.input', compact('class'));
    }

    /************************************************************************
    *Inquiry post input
    /************************************************************************/
    public function postInput(Request $request){
    	$locale = LaravelLocalization::getCurrentLocale();
    	if($locale == 'ja'){
    		$rule = Inquiry::$ruleJp;
    		$msg = Inquiry::$ja_msg;
    	}elseif ($locale == 'en') {
    		$rule = Inquiry::$rules;
    		$msg = Inquiry::$en_msg;
    	}else{
    		$rule = Inquiry::$rules;
    		$msg = Inquiry::$vi_msg;
    	}
    	$inputData = array();

    	$validator = Validator::make(Input::all(), $rule, $msg);
        if($validator->passes()){
            $inputData['company']       = Input::get('company');
            $inputData['title']    		= Input::get('title');
            $inputData['name']          = Input::get('name');
            $inputData['address']       = Input::get('address');
 			$inputData['phone']         = Input::get('phone');
            $inputData['email']         = Input::get('email');
            $inputData['comment']       = Input::get('comment');
            
            if(!empty(Input::get('furigana')))
            	$inputData['furigana']      = Input::get('furigana');

            Session::put('inputdata', $inputData);           
            return Redirect::to($locale.'/inquiry/confirm');
        }

        return Redirect::to($locale.'/inquiry/')               
                ->withErrors($validator)
                ->withInput();
    }

    /************************************************************************
    *Inquiry get confirm
    /************************************************************************/
    public function getConfirm(Request $request){
        $class = 'active';
    	$data = Session::get('inputdata');
    	return view('frontend.inquiry.confirm', compact('data', 'class'));
    }

    /************************************************************************
    *Inquiry post confirm
    /************************************************************************/
     public function postConfirm(Request $request){
        $input_data = Session::get('inputdata');
        if(empty($input_data)) return Redirect::route('frontend.inquiry.input');
        $input = array();        
        $input = $input_data ;
        $input['created_at'] = date('Y-m-d H:i:s');
        $input['updated_at'] = date('Y-m-d H:i:s');
        DB::table('contact')->insert($input);

        //send email
        $signature = DB::table('signature')
                                ->where('is_deleted', ACTIVE)
                                ->find(1);
        $sigArr = array();
        $sigArr['signature'] = $signature->content;

        $data = array();
        if (!empty($input_data)) {
            $data = array_merge($input_data, $sigArr);
        }

        Mail::send('frontend.inquiry.email', $data, function($message) use ($data)  {
        $email = DB::table('setting')->where('is_deleted', ACTIVE)->select('setting.email')->find(1);
        $email_to = $email->email;
        $message->to($email_to, 'Chiroro-Net Customer Support');
        $message->subject('お問い合わせ');
        $message->from($data['email']);
        });
        return Redirect::route('frontend.inquiry.complete');
    }

    /************************************************************************
    *Inquiry complete
    /************************************************************************/
    public function getComplete(Request $request){
        $request->session()->forget('inputdata');       
    	$class = 'active';
    	return view('frontend.inquiry.complete', compact('class'));        
    }
}
