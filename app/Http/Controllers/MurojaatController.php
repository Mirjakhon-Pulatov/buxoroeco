<?php

namespace App\Http\Controllers;

use App\Models\JismoniyMurojaat;
use App\Models\MurojaatFiles;
use App\Models\MurojaatJavob;
use App\Models\YuridikMurojaat;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class MurojaatController extends Controller
{

    public function new_murojaats()
    {
        return view('admin.murojaat.new');
    }

    public function old_murojaats()
    {
        return view('admin.murojaat.old');
    }

    public function n_view($type, $code)
    {
//        dd($code);
        if ($type == 'yuridik') {
            $infs = DB::select("Select * from `yuridik_murojaats` where `code` = '$code' ");
        } elseif ($type == 'jismoniy') {
            $infs = DB::select("Select * from `jismoniy_murojaats` where `code` = '$code' ");
        }
        return view('admin.murojaat.view', compact('infs', 'type', 'code'));
    }

    public function check(Request $request)
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
            return view('blocks.result', compact('status', 'code'));
        }
        return view('blocks.result', compact('status', 'raqam', 'code'));

    }


    public function delete(Request $request)
    {
        $type = $request->input('type');
        $code = $request->input('code');
        if ($type == 'yuridik') {
            $m = DB::select(" DELETE FROM `yuridik_murojaats` WHERE `yuridik_murojaats`.`code` = '$code' ");
        } elseif ($type == 'jismoniy') {
            $m = DB::select(" DELETE FROM `jismoniy_murojaats` WHERE `jismoniy_murojaats`.`code` = '$code' ");
        }
        return redirect()->back();
    }


    public function murojaat(Request $request)
    {
        $type = $request->input('type');
        // jismoniy shaxs uchun murojaat
        if ($type == 'jismoniy') {
            try {
                $code = $request->input('code');
                $fullname = $request->input('fullname');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $address = $request->input('address');
                $district = $request->input('district');
                $mavzu = $request->input('mavzu');
                $text = $request->input('text');
                $status = 'new';

                if ($request->hasFile('files')) {
                    $files = $request->file('files');

                    foreach ($files as $file) {
                        $name = $file->getClientOriginalName();
                        $extension = $file->guessClientExtension();
                        $size = $file->getSize();
                        $size = $size / 1024;

                        if ($size < 1024) {
                            $size = floor($size);
                            $size = $size . " кб";
                        } else {
                            $size = $size / 1024;
                            $megabytes = floor($size);
                            $kilobytes = round(($size - $megabytes) * 1024);
                            $kilobytes = substr($kilobytes, 0, -1);
                            $size = $megabytes . "." . $kilobytes . ' мб ';
                        }

                        $filename = Carbon::now()->format('H-i-s_-_d-m-Y') . "_" . uniqid() . "." . $extension;

                        $file->move('public/uploads/files', $filename);

                        MurojaatFiles::create([
                            'code' => $code,
                            'filename' => $filename,
                            'type' => $extension,
                            'size' => $size
                        ]);
                    }
                }


                $t_raqam1 = DB::select("Select `t_raqam` from `jismoniy_murojaats` order by `t_raqam` desc  limit 1");
                if ($t_raqam1) {
                    $t = $t_raqam1[0]->t_raqam + 1;
                } else {
                    $t = 1;
                }

                JismoniyMurojaat::create([
                    't_raqam' => $t,
                    'code' => $code,
                    'fullname' => $fullname,
                    'email' => $email,
                    'phone' => $phone,
                    'address' => $address,
                    'district' => $district,
                    'title' => $mavzu,
                    'text' => $text,
                    'status' => $status,
                ]);

                return view('blocks.s_result', compact('t', 'code'));

            } catch (\Exception  $e) {
                return redirect(url('/'));
            }
        } // yuridik shax uchun murojaat
        elseif ($type == 'yuridik') {
            try {
                $code = $request->input('code');
                $fullname = $request->input('fullname');
                $mainactivities = $request->input('mainactivities');
                $inn = $request->input('inn');
                $header_name = $request->input('header_name');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $mavzu = $request->input('title');
                $text = $request->input('text');
                $files = $request->file('files');

                if ($request->hasFile('files')) {
                    $files = $request->file('files');

                    foreach ($files as $file) {
                        $name = $file->getClientOriginalName();
                        $extension = $file->guessClientExtension();
                        $size = $file->getSize();
                        $size = $size / 1024;

                        if ($size < 1024) {
                            $size = floor($size);
                            $size = $size . " кб";
                        } else {
                            $size = $size / 1024;
                            $megabytes = floor($size);
                            $kilobytes = round(($size - $megabytes) * 1024);
                            $kilobytes = substr($kilobytes, 0, -1);
                            $size = $megabytes . "." . $kilobytes . ' мб ';
                        }

                        $filename = Carbon::now()->format('H-i-s_-_d-m-Y') . "_" . uniqid() . "." . $extension;

                        $file->move('public/uploads/files', $filename);

                        MurojaatFiles::create([
                            'code' => $code,
                            'filename' => $filename,
                            'type' => $extension,
                            'size' => $size
                        ]);
                    }
                }

                $t_raqam1 = DB::select("Select `t_raqam` from `yuridik_murojaats` order by `t_raqam` desc  limit 1");
                if ($t_raqam1) {
                    $t = $t_raqam1[0]->t_raqam + 1;

                } else {
                    $t = 1;
                }


                YuridikMurojaat::create([
                    'status' => 'new',
                    't_raqam' => $t,
                    'code' => $code,
                    'fullname' => $fullname,
                    'mainactivities' => $mainactivities,
                    'inn' => $inn,
                    'header_name' => $header_name,
                    'email' => $email,
                    'phone' => $phone,
                    'title' => $mavzu,
                    'text' => $text,
                ]);

                return view('blocks.s_result', compact('t', 'code'));


            } catch (\Exception $e) {
                return redirect(url('/'));
            }
        }
    }


    public function ru_murojaat(Request $request)
    {
        $type = $request->input('type');
        // jismoniy shaxs uchun murojaat
        if ($type == 'jismoniy') {
            try {
                $code = $request->input('code');
                $fullname = $request->input('fullname');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $address = $request->input('address');
                $district = $request->input('district');
                $mavzu = $request->input('mavzu');
                $text = $request->input('text');
                $status = 'new';

                if ($request->hasFile('files')) {
                    $files = $request->file('files');

                    foreach ($files as $file) {
                        $name = $file->getClientOriginalName();
                        $extension = $file->guessClientExtension();
                        $size = $file->getSize();
                        $size = $size / 1024;

                        if ($size < 1024) {
                            $size = floor($size);
                            $size = $size . " кб";
                        } else {
                            $size = $size / 1024;
                            $megabytes = floor($size);
                            $kilobytes = round(($size - $megabytes) * 1024);
                            $kilobytes = substr($kilobytes, 0, -1);
                            $size = $megabytes . "." . $kilobytes . ' мб ';
                        }

                        $filename = Carbon::now()->format('H-i-s_-_d-m-Y') . "_" . uniqid() . "." . $extension;

                        $file->move('public/uploads/files', $filename);

                        MurojaatFiles::create([
                            'code' => $code,
                            'filename' => $filename,
                            'type' => $extension,
                            'size' => $size
                        ]);
                    }
                }


                $t_raqam1 = DB::select("Select `t_raqam` from `jismoniy_murojaats` order by `t_raqam` desc  limit 1");
                if ($t_raqam1) {
                    $t = $t_raqam1[0]->t_raqam + 1;
                } else {
                    $t = 1;
                }

                JismoniyMurojaat::create([
                    't_raqam' => $t,
                    'code' => $code,
                    'fullname' => $fullname,
                    'email' => $email,
                    'phone' => $phone,
                    'address' => $address,
                    'district' => $district,
                    'title' => $mavzu,
                    'text' => $text,
                    'status' => $status,
                ]);

                return view('ru.blocks.s_result', compact('t', 'code'));

            } catch (\Exception  $e) {
                return redirect(url('/'));
            }
        } // yuridik shax uchun murojaat
        elseif ($type == 'yuridik') {
            try {
                $code = $request->input('code');
                $fullname = $request->input('fullname');
                $mainactivities = $request->input('mainactivities');
                $inn = $request->input('inn');
                $header_name = $request->input('header_name');
                $email = $request->input('email');
                $phone = $request->input('phone');
                $mavzu = $request->input('title');
                $text = $request->input('text');
                $files = $request->file('files');

                if ($request->hasFile('files')) {
                    $files = $request->file('files');

                    foreach ($files as $file) {
                        $name = $file->getClientOriginalName();
                        $extension = $file->guessClientExtension();
                        $size = $file->getSize();
                        $size = $size / 1024;

                        if ($size < 1024) {
                            $size = floor($size);
                            $size = $size . " кб";
                        } else {
                            $size = $size / 1024;
                            $megabytes = floor($size);
                            $kilobytes = round(($size - $megabytes) * 1024);
                            $kilobytes = substr($kilobytes, 0, -1);
                            $size = $megabytes . "." . $kilobytes . ' мб ';
                        }

                        $filename = Carbon::now()->format('H-i-s_-_d-m-Y') . "_" . uniqid() . "." . $extension;

                        $file->move('public/uploads/files', $filename);

                        MurojaatFiles::create([
                            'code' => $code,
                            'filename' => $filename,
                            'type' => $extension,
                            'size' => $size
                        ]);
                    }
                }

                $t_raqam1 = DB::select("Select `t_raqam` from `yuridik_murojaats` order by `t_raqam` desc  limit 1");
                if ($t_raqam1) {
                    $t = $t_raqam1[0]->t_raqam + 1;

                } else {
                    $t = 1;
                }


                YuridikMurojaat::create([
                    'status' => 'new',
                    't_raqam' => $t,
                    'code' => $code,
                    'fullname' => $fullname,
                    'mainactivities' => $mainactivities,
                    'inn' => $inn,
                    'header_name' => $header_name,
                    'email' => $email,
                    'phone' => $phone,
                    'title' => $mavzu,
                    'text' => $text,
                ]);

                return view('ru.blocks.s_result', compact('t', 'code'));


            } catch (\Exception $e) {
                return redirect(url('/'));
            }
        }
    }

    public function generatepdf(Request $request)
    {
//        dd($request->all());
        $type = $request->input('type');
        $code = $request->input('code');
        $data = [
            'type' => $type,
            'code' => $code,
        ];

        $pdf = Pdf::loadView('admin.murojaat.murojaat-pdf', $data);
        return $pdf->download('Murojaat.pdf');
    }

    public function javob(Request $request)
    {
//        dd($request->all());
        $type = $request->input('type');
        $code = $request->input('code');
        $message = $request->input('javob_matni');

// Initialize an empty array to store file details
        $fileDetails = [];

        if ($request->hasFile('files')) {
            $files = $request->file('files');

            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $extension = $file->guessClientExtension();
                $size = $file->getSize();
                $sizeInKB = $size / 1024;

                if ($sizeInKB < 1024) {
                    $formattedSize = floor($sizeInKB) . " кб";
                } else {
                    $sizeInMB = $sizeInKB / 1024;
                    $megabytes = floor($sizeInMB);
                    $kilobytes = round(($sizeInMB - $megabytes) * 1024);
                    $formattedSize = $megabytes . "." . $kilobytes . ' мб ';
                }

                $filename = Carbon::now()->format('H-i-s_-_d-m-Y') . "_" . uniqid() . "." . $extension;

                $file->move('public/uploads/files/', $filename);

                // Store file details in an array
                $fileDetails[] = [
                    'filename' => $filename,
                    'type' => $extension,
                    'size' => $formattedSize,
                ];
            }
        }

        // Create separate records for each file in the database
        foreach ($fileDetails as $fileDetail) {
            MurojaatJavob::create([
                'code' => $code,
                'text' => $message,
                'filename' => $fileDetail['filename'],
                'type' => $fileDetail['type'],
                'size' => $fileDetail['size'],
            ]);
        }

        if ($type == 'jismoniy') {
            DB::select("UPDATE `jismoniy_murojaats` SET `status` = 'done' WHERE `jismoniy_murojaats`.`code` = '$code' ");
        } elseif ($type == 'yuridik') {
            DB::select("UPDATE `yuridik_murojaats` SET `status` = 'done' WHERE `yuridik_murojaats`.`code` = '$code' ");
        } else {
            return redirect(url('/'));
        }

        return redirect()->back();


//
//        $mes = 'Сообщение: ' . $message;
//        sendMail("mirjahonpulatov@gmail.com", "Sizning murojatingiz bo'yicha", $mes);
//
//        return redirect(url('/'));
    }

}
