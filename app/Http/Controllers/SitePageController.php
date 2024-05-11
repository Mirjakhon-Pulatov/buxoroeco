<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
include 'mail/phpmailer.php';

class SitePageController extends Controller
{
    public function index()
    {
//        dd(App::getLocale());
        return view('index');
    }

    public function leaders()
    {
        $leaders = DB::select("Select * from `leadership` order by position asc ");
        return view('blocks.leadership', compact('leaders'));
    }

    public function tdl()
    {
        $tdls = DB::select("Select * from `teritorial` order by position asc");
        return view('blocks.view', compact('tdls'));
    }

    public function bulinmalar()
    {
        $bxodims = DB::select("Select * from bbx order by position asc");
        return view('blocks.bulinmalar', compact('bxodims'));

    }

    public function services()
    {
        return view('blocks.services');
    }

    public function content($slug)
    {
        $slugs = DB::table('pages')
            ->where('slug', $slug)
            ->get();

        if (count($slugs) > 0) {
            return view('blocks.content', compact('slugs'));
        } else {
            abort(404);
        }
    }

    public function type($type)
    {
        if ($type == 'news') {
            $news = DB::table('news')->orderBy('date', 'desc')->paginate('6');
        } elseif ($type == 'ecocontrol') {
            $news = DB::table('ecocontrol')->orderBy('date', 'desc')->paginate('6');
        }

        return view('blocks.all_type', compact(['news', 'type']));
    }

    public function view($type, $title)
    {
        if ($type == 'news') {
            $news = DB::table('news')
                ->where('slug', $title)
                ->get();

        } elseif ($type == 'ecocontrol') {
            $news = DB::table('ecocontrol')
                ->where('slug', $title)
                ->get();
        } else {
            abort(404);
        }

        if (count($news) > 0) {
            return view('blocks.news', compact('news', 'type'));
        } else {
            abort(404);
        }

    }

    public function photo_gallery()
    {
        return view('blocks.photo_gallery');
    }

    public function video()
    {
        return view('blocks.video_gallery');
    }

    public function murojaat()
    {
        return view('blocks.murojaat');
    }

    public function contact()
    {
        return view('blocks.contact');
    }

    public function send(Request $request)
    {
        $fio = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('subject');
        $message = $request->input('message');

        $mes = 'Ф.И.О: ' . $fio . "<br>" . 'Телефон: ' . $phone . "<br>" . 'Почта: ' . $email . "<br>" . "<br>" . 'Сообщение: ' . $message;
        sendMail("cydik@mailinator.com", "Заявка с сайта buxoroeco.uz", $mes);

        return redirect(url('/'));
    }

    public function getImage($table, $code)
    {
        $getImageId = DB::select("SELECT image_id FROM `featured_images` where dt = '$table' and article = '$code' ");
        if ($getImageId) {
            $getImageId = $getImageId[0]->image_id;
            $getImage = DB::select("Select file from gallerys where id = '$getImageId' ");
            if ($getImage) {
                return $getImage = $getImage[0]->file;
            }
            return '';
        } else {
            return '';
        }
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $query = DB::select("SELECT * FROM `pages` where body LIKE'%$search%' or title LIKE '%$search%' ");
        if ($query) {
            return view('blocks.page_result', compact('query'));
        } else {
            return view('blocks.page_result', compact('query'));
        }
    }

    public function sp_page($title)
    {
        $spgs = DB::table('specialpages')
            ->where('slug', $title)
            ->get();
        if (count($spgs) > 0) {
            return view('blocks.special-page', compact('spgs'));
        } else {
            abort(404);
        }

    }

    public function ru_sp_page($title)
    {
        $spgs = DB::table('specialpages__ru')
            ->where('slug', $title)
            ->get();
        if (count($spgs) > 0) {
            return view('ru.blocks.special-page', compact('spgs'));
        } else {
            return response()->view('error.ru.404', [], 404);
        }
    }


    public function ru_index()
    {
        return view('ru.index');
    }

    public function ru_contact()
    {
        return view('ru.blocks.contact');
    }

    public function ru_photo_gallery()
    {
        return view('ru.blocks.photo_gallery');
    }

    public function ru_video()
    {
        return view('ru.blocks.video_gallery');
    }

    public function ru_leaders()
    {
        $leaders = DB::select("Select * from `leadership__ru` order by position asc ");
        return view('ru.blocks.leadership', compact('leaders'));
    }

    public function ru_tdl()
    {
        $tdls = DB::select("Select * from `teritorial__ru` order by position asc");
        return view('ru.blocks.view', compact('tdls'));
    }

    public function ru_bulinmalar()
    {
        $bxodims = DB::select("Select * from `bbx__ru` order by position asc");
        return view('ru.blocks.bulinmalar', compact('bxodims'));
    }

    public function ru_services()
    {
        return view('ru.blocks.services');
    }

    public function ru_murojaat()
    {
        return view('ru.blocks.murojaat');
    }

    public function ru_content($slug)
    {
        $slugs = DB::table('pages__ru')
            ->where('slug', $slug)
            ->get();

        if (count($slugs) > 0) {
            return view('ru.blocks.content', compact('slugs'));
        } else {
            return response()->view('error.ru.404', [], 404);
        }
    }

    public function ru_type($type)
    {
        if ($type == 'news') {
            $news = DB::table('news__ru')
                ->orderByDesc('date')
                ->get();
        } elseif ($type == 'ecocontrol') {
            $news = DB::table('ecocontrol__ru')
                ->orderByDesc('date')
                ->get();
        } else {
            return response()->view('error.ru.404', [], 404);
        }
        if (count($news) > 0) {
            return view('ru.blocks.all_type', compact(['news', 'type']));
        } else {
            return response()->view('error.ru.404', [], 404);
        }


    }


    public function ru_view($type, $title)
    {
        if ($type == 'news') {
            $news = DB::table('news__ru')
                ->where('slug', $title)
                ->get();
        } elseif ($type == 'ecocontrol') {
            $news = DB::table('ecocontrol__ru')
                ->where('slug', $title)
                ->get();
        } else {
            return response()->view('error.ru.404', [], 404);
        }

        if (count($news) > 0) {
            return view('ru.blocks.news', compact('news', 'type'));
        } else {
            return response()->view('error.ru.404', [], 404);
        }


    }

    public function ru_check(Request $request)
    {
        $raqam = $request->input('m_raqam');
        $code = $request->input('m_code');
        $y = DB::select("Select `status` from `yuridik_murojaats` where `code` like $code and `t_raqam` = '$raqam' ");
        $j = DB::select("Select `status` from `jismoniy_murojaats` where `code` like $code and `t_raqam` = '$raqam' ");
        if ($y) {
            $status = $y[0]->status;
        } elseif ($j) {
            $status = $j[0]->status;
        } else {
            $status = 'none';
            return view('ru.blocks.result', compact('status', 'code'));
        }
        return view('ru.blocks.result', compact('status', 'raqam', 'code'));

    }

    public function ru_search(Request $request)
    {
        $search = $request->input('search');
        $query = DB::select("SELECT * FROM `pages__ru` where body LIKE'%$search%' or title LIKE '%$search%' ");
        if ($query) {
            return view('ru.blocks.page_result', compact('query'));
        } else {
            return view('ru.blocks.page_result', compact('query'));
        }
    }

}
