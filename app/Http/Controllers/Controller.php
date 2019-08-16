<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function borough($region)
    {
            return view('borough',compact ('region' ));
    }
    public function policy() {
        return view('policy');
    }
    public function projects($project_num) {
        $projects = [
            [
                'id' => 1,
                'name' => 'NYA TORGET 365',
                'title' => 'Här kan du läsa om projektet Nya Torget 365 i Sundbyberg. Ett skolprojekt i samarbete med Ängskolan med målet att öka förståelsen för stadsutveckling och främja jämställdhet i branschen.',
                'description' => 'För att göra projektet övergripligt och tydligt för ungdomarna skapade vi en infografik som sammanfattar uppdraget.',
                'good_place_link' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/infographic_A3.jpg',
                'gallery_link' => 'http://www.alltomsundbyberg.se/galleriet/',
                'slider' => [
                    [
                        'id' => '1',
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/05/01.jpg',
                        'title' => 'Nya Torget 365',
                        'subtitle' => 'Nyligen gick AlltomSundbyberg ihop med Ängskolan för att genomföra ett kreativt projekt. I ämnena Teknik och Bild ska 143 elever i årskurs 8 skapa egna modeller av vad de önskar av Sundbybergs nya torg. Efter mycket planering har vi äntligen kommit igång. Från den...',
                        'sell_detail_link' => 'http://www.alltomsundbyberg.se/nya-torget-365/nya-torget-365/'
                    ],
                    [
                        'id' => '2',
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/5.jpg"',
                        'title' => 'Toppbetyg för Nya Torget 365!',
                        'subtitle' => 'Igår var det dags för vår stora presentation. Det var ett stort ögonblick när man fick se fem unika och genomtänkta torg. 30 minuter innan besökarna tågade in samlades eleverna i aulan för att öva på sin presentationsteknik medan vi fyllde glasen och tilltugget. Alla...',
                        'sell_detail_link' => 'http://www.alltomsundbyberg.se/nya-torget-365/slutpresentationen-av-nya-torget-365/'
                    ],
                ],
                'gallery' => [
                    [
                        'date' => '2017-03-17',
                        'desc' => 'Vi möter eleverna för första gången i skolans aula och presenterar projektet. 143 elever är många att samarbeta med.',
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/preview.jpg'
                    ],
                    [
                        'date' => '2017-03-22',
                        'desc' => 'En första leverans av material till skolan packas upp. Ett gäng roliga och nya verktyg att arbeta med är en motivationshöjare!',
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/preview-2.jpg'
                    ],
                    [
                        'date' => '2017-03-22',
                        'desc' => 'Bildlärare Erika Klåvus visar samordningen i klasserna och hur de ska logga sina aktiviteter i en dagbok. Varje modell på torgen ska motiveras genom en beskrivning om varför man har valt att bygga just den, varför den står där, vem som ska nyttja den och vad den fyller för funktion.',
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/preview-3.jpg'
                    ],
                    [
                        'date' => '2017-03-29',
                        'desc' => 'Flygbilderna i skala 1:100 är levererade och här står en klass och brainstormar sina idéer. Den vita ytan illustrerar spelplanen för projektet.',
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/preview-1.jpg'
                    ],
                    [
                        'date' => '2017-04-06',
                        'desc' => 'Klass 8C skissar fram idéer och bygger sina första prototyper. Här får eleverna prova på när man räknar med skalor i arbetslivet. ',
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/prototyp.jpg'
                    ],

                ],
                'wp-blog' => [
                    [
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2018/05/Epstein2.png',
                        'link' => 'https://www.facebook.com/notes/dn-stockholm/%C3%A5ttondeklassare-planerar-framtidens-sundbyberg/2045067745761965/?fref=mentions'
                    ],
                    [
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2018/05/viisundbyberg1805.png',
                        'link' => 'https://www.facebook.com/notes/dn-stockholm/%C3%A5ttondeklassare-planerar-framtidens-sundbyberg/2045067745761965/?fref=mentions'
                    ],
                    [
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/05/mitt-i.png',
                        'link' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2018/05/MITT-i-2017-05-23.pdf'
                    ],
                    [
                        'img' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/05/Vi-i-Sundbyberg.png',
                        'link' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2018/05/MITT-i-2017-05-23.pdf'
                    ],

                ],
                'sponsors' => 'http://www.alltomsundbyberg.se/wp-content/uploads/2017/04/Våra-sponsorer-nya2.png'
            ],
            [
                'id' => 2,
            ]
        ];
        $data = array_filter($projects, function($item) use ($project_num) {
            return $item['id'] == $project_num;
        });
        $data = (object)$data[0] ?? null;
        return view('projects', compact('data'));
    }
    public function contact_us() {
        return view('contact-us');
    }
    public function sendMail(Request $request) {
        Mail::send('emails.mail', ['req' => $request], function ($r) use ($request){
            $mail = "mykytyn907@gmail.com";
            $r->to($mail)->subject($request->message);
        });
        return back();

    }
}

