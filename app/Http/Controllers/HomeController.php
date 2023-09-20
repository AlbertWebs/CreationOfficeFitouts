<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Models\ReplyMessage;
use App\Models\Message;
use Illuminate\Support\Facades\Redirect;
use App\Models\Portfolio;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Interior Designer in Kenya | Creation Office Fitouts');
        SEOMeta::setDescription('Best Office Fitouts Contractor in Kenya  - We are an Interior fitting contractor in Nairobi - We are professionals in Construction, Refurbishments, Ceiling, Flooring');
        SEOMeta::setCanonical(''.url('/').'/');

        OpenGraph::setDescription('Best Office Fitouts Contractor in Kenya - We are an Interior fitting contractor in Nairobi - We are professionals in Construction, Refurbishments, Ceiling, Flooring');
        OpenGraph::setTitle('Interior Designer in Kenya | Creation Office Fitouts');
        OpenGraph::setUrl(''.url('/').'/');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Interior Designer in Kenya | Creation Office Fitouts');
        TwitterCard::setSite('@creationoffice1');

        $title= "Creation Office Fitouts";
        return view('front.index', compact('title'));
    }

    public function center_of_excellences(){

            SEOMeta::setTitle('Services | Creation Office Fitouts - Best Interior fitting contractor in Nairobi');
            SEOMeta::setDescription('Interior Design Company in Nairobi - Interior Architecture , Construction, Refurbishment, Partitioning , Ceiling & Floors, Furniture Supplies');
            SEOMeta::setCanonical(''.url('/').'/center-of-excellence');

            OpenGraph::setDescription('Interior Design Company in Nairobi - Interior Architecture , Construction, Refurbishment, Partitioning , Ceiling & Floors, Furniture Supplies');
            OpenGraph::setTitle('Services | Creation Office Fitouts - Best Interior fitting contractor in Nairobi');
            OpenGraph::setUrl(''.url('/').'/center-of-excellence');
            OpenGraph::addProperty('type', 'articles');


            TwitterCard::setTitle('Services | Creation Office Fitouts - Best Interior fitting contractor in Nairobi');
            TwitterCard::setSite('@creationoffice1');


            $title= "Center of Excellence";
            $Service = DB::table('services')->get();
            return view('front.center_of_excellences', compact('title','Service'));

    }

    public function center_of_excellence($slung){
        $Service = DB::table('services')->where('slung',$slung)->get();
        foreach ($Service as $key => $value) {
            # code...
            SEOMeta::setTitle(''.$value->title.' Contractor in Kenya | Creation Office Fitouts');
            SEOMeta::setDescription('interior Designer in Uganda');
            SEOMeta::setCanonical(''.url('/').'/center-of-excellence/'.$slung.'');

            OpenGraph::setDescription('interior Designer in Uganda');
            OpenGraph::setTitle(''.$value->title.' Contractor in Kenya | Creation Office Fitouts');
            OpenGraph::setUrl(''.url('/').'/center-of-excellence/'.$slung.'');
            OpenGraph::addProperty('type', 'articles');

            TwitterCard::setTitle(''.$value->title.' Contractor in Kenya | Creation Office Fitouts');
            TwitterCard::setSite('@RibyeDesigners');

            JsonLd::setTitle(''.$value->title.' Contractor in Kenya | Creation Office Fitouts');
            JsonLd::setDescription('interior Designer in Uganda');
            JsonLd::addImage(''.url('/').'/uploads/Ribye-Original-1.png');
            $title= $value->title;
            return view('front.center_of_excellence' ,compact('Service','title'));
        }
    }


    public function folio($id){

        $Portfolio = Portfolio::where('slung',$id)->get();
        SEOMeta::setTitle('Projects - Creation Office Fitouts -Interior Designers in Nairobi');
        SEOMeta::setDescription('Interior Design Company in Nairobi - We are an interior design firm, based in Kenya.  We always endeavor to uphold the highest standards of art, design, planning, and project management while strictly adhering to the ethics and best practices for the benefit of our clients - Creation Office Fitouts');
        SEOMeta::setCanonical(''.url('/').'/portfolio');

        OpenGraph::setDescription('Interior Design Company in Nairobi - We are an interior design firm, based in Kenya.  We always endeavor to uphold the highest standards of art, design, planning, and project management while strictly adhering to the ethics and best practices for the benefit of our clients - Creation Office Fitouts');
        OpenGraph::setTitle('Projects - Creation Office Fitouts -Interior Designers in Nairobi');
        OpenGraph::setUrl(''.url('/').'/portfolio');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Projects - Creation Office Fitouts -Interior Designers in Nairobi');
        TwitterCard::setSite('@creationoffice1');

        $title= "Our Portfolio";
        return view('front.folio', compact('title','Portfolio'));
    }

    public function portfolio(){
        SEOMeta::setTitle('Projects - Creation Office Fitouts -Interior Designers in Nairobi');
        SEOMeta::setDescription('Interior Design Company in Nairobi - We are an interior design firm, based in Kenya.  We always endeavor to uphold the highest standards of art, design, planning, and project management while strictly adhering to the ethics and best practices for the benefit of our clients - Creation Office Fitouts');
        SEOMeta::setCanonical(''.url('/').'/portfolio');

        OpenGraph::setDescription('Interior Design Company in Nairobi - We are an interior design firm, based in Kenya.  We always endeavor to uphold the highest standards of art, design, planning, and project management while strictly adhering to the ethics and best practices for the benefit of our clients - Creation Office Fitouts');
        OpenGraph::setTitle('Projects - Creation Office Fitouts -Interior Designers in Nairobi');
        OpenGraph::setUrl(''.url('/').'/portfolio');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Projects - Creation Office Fitouts -Interior Designers in Nairobi');
        TwitterCard::setSite('@creationoffice1');

        $title= "Our Portfolio";
        return view('front.portfolio', compact('title'));
    }

    public function contact_us(){

        SEOMeta::setTitle('Contact Us | Creation Office Fitouts - Interior Designer in Nairobi');
        SEOMeta::setDescription('Interior Design Company in Nairobi - We are an interior design firm, based in Kenya.  We always endeavor to uphold the highest standards of art, design, planning, and project management while strictly adhering to the ethics and best practices for the benefit of our clients - Creation Office Fitouts');
        SEOMeta::setCanonical(''.url('/').'/contact');

        OpenGraph::setDescription('Interior Design Company in Nairobi - We are an interior design firm, based in Kenya.  We always endeavor to uphold the highest standards of art, design, planning, and project management while strictly adhering to the ethics and best practices for the benefit of our clients - Creation Office Fitouts');
        OpenGraph::setTitle('Contact Us | Creation Office Fitouts - Interior Designer in Nairobi');
        OpenGraph::setUrl(''.url('/').'/contact');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Contact Us | Creation Office Fitouts - Interior Designer in Nairobi');
        TwitterCard::setSite('@creationoffice1');

        $title= "Contact Us";
        return view('front.contact_us', compact('title'));
    }

    public function company(){
        SEOMeta::setTitle('The Company | Ribye Designers | Interior Designers in kampala');
        SEOMeta::setDescription('interior Designer in Uganda');
        SEOMeta::setCanonical(''.url('/').'/the-company');

        OpenGraph::setDescription('interior Designer in Uganda');
        OpenGraph::setTitle('The Company | Ribye Designers | Interior Designers in kampala');
        OpenGraph::setUrl(''.url('/').'/the-company');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('The Company | Ribye Designers | Interior Designers in kampala');
        TwitterCard::setSite('@RibyeDesigners');

        JsonLd::setTitle('The Company | Ribye Designers | Interior Designers in kampala');
        JsonLd::setDescription('interior Designer in Uganda');
        JsonLd::addImage(''.url('/').'/uploads/Ribye-Original-1.png');
        $title= "About Us";

        return view('front.company', compact('title'));
    }



    public function terms_and_conditions(){
        SEOMeta::setTitle('Terms and Conditions | Ribye Designers');
        SEOMeta::setDescription('interior Designer in Uganda');
        SEOMeta::setCanonical(''.url('/').'/terms-and-conditions');

        OpenGraph::setDescription('interior Designer in Uganda');
        OpenGraph::setTitle('Terms and Conditions | Ribye Designers');
        OpenGraph::setUrl(''.url('/').'/terms-and-conditions');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Terms and Conditions | Ribye Designers');
        TwitterCard::setSite('@RibyeDesigners');

        JsonLd::setTitle('Terms and Conditions | Ribye Designers');
        JsonLd::setDescription('interior Designer in Uganda');
        JsonLd::addImage(''.url('/').'/uploads/Ribye-Original-1.png');
        // $Terms = DB::table('terms')->get();
        $title= "Terms and Conditions";
        return view('front.terms-and-conditions', compact('title'));
    }

    public function copyright(){
        SEOMeta::setTitle('Copyright | Ribye Designers');
        SEOMeta::setDescription('interior Designer in Uganda');
        SEOMeta::setCanonical(''.url('/').'/copyright');

        OpenGraph::setDescription('interior Designer in Uganda');
        OpenGraph::setTitle('Copyright | Ribye Designers');
        OpenGraph::setUrl(''.url('/').'/copyright');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Copyright | Ribye Designers');
        TwitterCard::setSite('@RibyeDesigners');

        JsonLd::setTitle('Copyright | Ribye Designers');
        JsonLd::setDescription('interior Designer in Uganda');
        JsonLd::addImage(''.url('/').'/uploads/Ribye-Original-1.png');
        $title= "Copyright Statement";
        return view('front.copyright', compact('title'));
    }

    public function privacy_policy(){
        SEOMeta::setTitle('Privacy Policy | Ribye Designers');
        SEOMeta::setDescription('interior Designer in Uganda');
        SEOMeta::setCanonical(''.url('/').'/privacy-policy');

        OpenGraph::setDescription('interior Designer in Uganda');
        OpenGraph::setTitle('Privacy Policy | Ribye Designers');
        OpenGraph::setUrl(''.url('/').'/privacy-policy');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Terms and Conditions | Ribye Designers');
        TwitterCard::setSite('@RibyeDesigners');

        JsonLd::setTitle('Privacy Policy | Ribye Designers');
        JsonLd::setDescription('interior Designer in Uganda');
        JsonLd::addImage(''.url('/').'/uploads/Ribye-Original-1.png');
        // $Terms = DB::table('privacy')->get();
        $title= "Privacy Policy";
        return view('front.privacy-policy', compact('title'));
    }

    public function blogs($slung){
        $Blog = DB::table('blogs')->where('slung',$slung)->get();
        foreach ($Blog as $key => $value) {
            # code...
            SEOMeta::setTitle(''.$value->title.' Contractor in Kenya | Creation Office Fitouts');
            SEOMeta::setDescription('interior Designer in Uganda');
            SEOMeta::setCanonical(''.url('/').'/blogs/'.$slung.'');

            OpenGraph::setDescription('interior Designer in Uganda');
            OpenGraph::setTitle(''.$value->title.' Contractor in Kenya | Creation Office Fitouts');
            OpenGraph::setUrl(''.url('/').'/blogs/'.$slung.'');
            OpenGraph::addProperty('type', 'articles');

            TwitterCard::setTitle(''.$value->title.' Contractor in Kenya | Creation Office Fitouts');
            TwitterCard::setSite('@RibyeDesigners');

            JsonLd::setTitle(''.$value->title.' Contractor in Kenya | Creation Office Fitouts');
            JsonLd::setDescription('interior Designer in Uganda');
            JsonLd::addImage(''.url('/').'/uploads/Ribye-Original-1.png');
            $title = $value->title;
            return view('front.blog' ,compact('title','Blog'));
        }
    }


    public function show(){
        $Table = DB::select('SHOW TABLES');
        foreach ($Table as $key => $value) {
            # code...
            echo $value->Tables_in_royal;
            echo ",";
        }

    }


    public function message(Request $request){
        // Check if message has links
        if($request->verify_contact == $request->verify_contact_input){
            $name = $request->name;
            $email = $request->email;
            $subject = $request->subject;
            $phone = $request->phone;
            $message = $request->message;
            $Joiner = "Hello Admin, User with name $name, and email $email, Phone Number $phone and Website $subject : Has Sent an Enquiry as -> $message";
            ReplyMessage::sendMessage($name,$email,$Joiner);
            return response()->json(['success' => true]);
        }else{
            return response()->json(['success' => true]);
        }
    }

    public function submitMessage(Request $request){
        if(!empty($request->input('checkmate'))) {
            Session::flash('message', "Your Message Has Been Sent");
            return Redirect::back();
        }else{
            $from = $request->email;
            $name = $request->name;
            $message = $request->message;
            $subject = $request->subject;

            $Message = new Message;
            $Message->name = $name;
            $Message->email = $from;
            $Message->subject = $subject;
            $Message->content = $message;

            $Message->save();


            $reply = 'You have Received a Message From Creations Office Fitouts, Login To the admins Panel to reply';
            $name = 'Admin';
            $id = 0;

            $email = 'info@creationltd.co.ke';

            ReplyMessage::SendMessage($message,$subject,$name,$email,$id,$from);

            Session::flash('message', "Your Message Has Been Sent");
            return Redirect::back();
        }

    }

}


