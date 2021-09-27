<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function SocialSetting()
    {
        $social = DB::table('socials')->first();
        return view('backend.setting.social', compact('social'));
    }

    public function UpdateSocial(Request $request, $id)
    {
        $data = array();
        $data['facebook'] = $request->facebook;
        $data['twitter'] = $request->twitter;
        $data['youtube'] = $request->youtube;
        $data['whatsapp'] = $request->whatsapp;
        $data['instagram'] = $request->instagram;
        $data['github'] = $request->github;
        $data['linkedin'] = $request->linkedin;

        DB::table('socials')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'Sosmed Link Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('social.setting')->with($notification);
    }

    public function SeoSetting()
    {
        $seo = DB::table('seos')->first();
        return view('backend.setting.seo', compact('seo'));
    }


    public function UpdateSeo(Request $request, $id)
    {
        $data = array();
        $data['meta_author'] = $request->meta_author;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_verification'] = $request->google_verification;
        $data['alexa_analytics'] = $request->alexa_analytics;

        DB::table('seos')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'SEO Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('seo.setting')->with($notification);
    }

    public function PrayerSetting()
    {
        $prayer = DB::table('prayers')->first();
        return view('backend.setting.prayer', compact('prayer'));
    }

    public function UpdatePrayer(Request $request, $id)
    {
        $data = array();
        $data['subuh'] = $request->subuh;
        $data['dhuhur'] = $request->dhuhur;
        $data['ashar'] = $request->ashar;
        $data['maghrib'] = $request->maghrib;
        $data['isya'] = $request->isya;
        $data['jumat'] = $request->jumat;

        DB::table('prayers')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'Prayers Time Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('prayer.setting')->with($notification);
    }

    public function LiveSetting()
    {
        $live = DB::table('lives')->first();
        return view('backend.setting.live', compact('live'));
    }

    public function Updatelive(Request $request, $id)
    {
        $data = array();
        $data['embed_code'] = $request->embed_code;


        DB::table('lives')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'Live Streaming Link Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('live.setting')->with($notification);
    }

    public function LiveActive(Request $request, $id)
    {
        DB::table('lives')->where('id', $id)->update(['status' => 1]);


        $notification = array(

            'message' => 'Live Streaming is Active',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }


    public function LiveInactive(Request $request, $id)
    {
        DB::table('lives')->where('id', $id)->update(['status' => 0]);


        $notification = array(

            'message' => 'Live Streaming is InActive',
            'alert-type' => 'error'

        );

        return redirect()->back()->with($notification);
    }

    public function NoticeSetting()
    {
        $notice = DB::table('notices')->first();
        return view('backend.setting.notice', compact('notice'));
    }

    public function UpdateNotice(Request $request, $id)
    {
        $data = array();
        $data['notice'] = $request->notice;


        DB::table('notices')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'Notice Application Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('notice.setting')->with($notification);
    }

    public function NoticeActive(Request $request, $id)
    {
        DB::table('notices')->where('id', $id)->update(['status' => 1]);


        $notification = array(

            'message' => 'Notice Info is Active',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }


    public function NoticeInactive(Request $request, $id)
    {
        DB::table('notices')->where('id', $id)->update(['status' => 0]);


        $notification = array(

            'message' => 'Notice info is InActive',
            'alert-type' => 'error'

        );

        return redirect()->back()->with($notification);
    }

    public function WebsiteAllSetting()
    {
        $website = DB::table('websites')->orderBy('id', 'desc')->paginate(5);
        return view('backend.website.index', compact('website'));
    }

    public function WebsiteAddSetting()
    {
        return view('backend.website.create');
    }

    public function StoreWebsite(Request $request)
    {
        $validated = $request->validate([
            'website_name' => 'required|unique:websites|max:255',
            'website_link' => 'required|unique:websites|max:255',
        ]);

        $data = array();
        $data['website_name'] = $request->website_name;
        $data['website_link'] = $request->website_link;
        DB::table('websites')->insert($data);

        $notification = array(

            'message' => 'Source Successfully Added',
            'alert-type' => 'success'

        );

        return redirect()->route('all.website')->with($notification);
    }

    public function EditWebsite($id)
    {
        $website = DB::table('websites')->where('id', $id)->first();

        return view('backend.website.edit', compact('website'));
    }

    public function UpdateWebsite(Request $request, $id)
    {

        $data = array();
        $data['website_name'] = $request->website_name;
        $data['website_link'] = $request->website_link;
        DB::table('websites')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'Source Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('all.website')->with($notification);
    }

    public function DeleteWebsite($id)
    {
        DB::table('websites')->where('id', $id)->delete();

        $notification = array(

            'message' => 'Source Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('all.website')->with($notification);
    }
}
