<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Slider;
use App\Models\Offer;
use App\Models\Partner;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Resources\SliderResource;
use App\Http\Resources\OfferResource;
use App\Http\Resources\PartnerResource;
use App\Http\Resources\TestimonialResource;
use App\Http\Resources\CityResource;
use App\Http\Resources\ActivityResource;
use App\Http\Resources\HomeCollageResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\ActivityHomeWithCityResource;
use App\Models\Subscription;
use App\Models\City;
use App\Models\Page;
use App\Models\Activity;
use App\Models\HomeCollage;
use Validator;
use App\Mail\sendContactInquiry;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class HomeController extends Controller
{
   
	public function index()
	{
    return view('home');
	}
	
	
	public function addSubscriptions(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'email' => 'required|email',
        ],[]);
   
        if($validator->fails()){
			return $this->errorResponse($validator->errors()->first(), 'Error', 203);
        }
		
		$data = $request->all();
		
		try{
				$subscription = Subscription::where("email",$data['email'])->first();
				if(empty($subscription)){
				$subscription = new Subscription();
				$subscription->email = $data['email'];
				$subscription->save();
				}
				
				$result = $this->successResponse([], "You have successfully subscribed.", 200);
				
         } catch(Exception $e){
			$result =  $this->errorResponse('Something went wrong.', 'Error', 203);
		} 
		
		return $result;
    }
	
	public function staticPage(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'page' => 'required',
        ],[]);
   
        if($validator->fails()){
			return $this->errorResponse($validator->errors()->first(), 'Error', 203);
        }
		
		$data = $request->all();
		
		try{
				$page = Page::where("page",$data['page'])->first();
				$data = new PageResource($page);
				$result = $this->successResponse($data, "Records fetch  successfully.", 200);
				
         } catch(Exception $e){
			$result =  $this->errorResponse('Something went wrong.', 'Error', 203);
		} 
		
		return $result;
    }
	
	public function sendContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'your_name' => 'required',
			'mobile_number' => 'required|numeric',
			'email' => 'required|email|max:255',
			'message' => 'required',
        ],[]);
   
        if($validator->fails()){
			return $this->errorResponse($validator->errors()->first(), 'Error', 203);
        }
		
		
		try{
				$data = (object) array(
                'your_name'      => $request->input('your_name'),
                'mobile_number'  => $request->input('mobile_number'),
                'email'          => $request->input('email'),
                'message'        => $request->input('message'),
            );
			
			$sendTo = 'lokesh@mailinator.com';
	
			Mail::to($sendTo, "New contact inquiry")->send(new sendContactInquiry($data));  
		
			$result = $this->successResponse([], "Your enquiry has been sent successfully.", 200);
				
         } catch(Exception $e){
			$result =  $this->errorResponse('Something went wrong.', 'Error', 203);
		} 
		
		return $result;
    }
	
}
