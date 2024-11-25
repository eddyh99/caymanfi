<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Services\GoogleCalendarService;
use DateTime;
use DateTimeZone;

class Homepage extends BaseController
{
    protected $googleCalendarService;
    
    public function __construct()
    {
        $this->googleCalendarService = new GoogleCalendarService();
    }

    public function index()
    {
        $mdata = [
            'title'     => 'Homepage - ' . NAMETITLE,
            'content'   => 'homepage/index',
            'extra'     => 'homepage/js/_js_index',
        ];

        return view('homepage/layout/wrapper', $mdata);
    }


    public function about()
    {
        $mdata = [
            'title'     => 'About - ' . NAMETITLE,
            'content'   => 'homepage/about',
        ];

        return view('homepage/layout/wrapper', $mdata);
    }


    public function funds_reallocation()
    {
        $mdata = [
            'title'     => 'Funds Reallocation - ' . NAMETITLE,
            'content'   => 'homepage/services/fund',
        ];

        return view('homepage/layout/wrapper', $mdata);
    }


    public function investment($segment = null)
    {   

        $segment = base64_decode($segment);

        if($segment == null){
            $mdata = [
                'title'     => 'Investment - ' . NAMETITLE,
                'content'   => 'homepage/investment/investment',
                'map'       => 'general'
            ];
        }else if($segment == "fund_management"){
            $mdata = [
                'title'     => 'Investment Fund Management - ' . NAMETITLE,
                'content'   => 'homepage/investment/fund_management',
                'map'       => 'funds',
                'extra'     => 'homepage/investment/js/_js_investment'
            ];
        }else if($segment == "bitcoin"){
            $mdata = [
                'title'     => 'Investment Bitcoin - ' . NAMETITLE,
                'content'   => 'homepage/investment/bitcoin',
                'map'       => 'bitcoin',
                'extra'     => 'homepage/investment/js/_js_investment'
            ];
        }else if($segment == "hedge"){
            $mdata = [
                'title'     => 'Investment Hedge Funds - ' . NAMETITLE,
                'content'   => 'homepage/investment/hedge',
                'map'       => 'hedge',
                'extra'     => 'homepage/investment/js/_js_investment'
            ];
        }

        $mdata['navbar'] = 'relative';

        return view('homepage/layout/wrapper', $mdata);
    }

    public function bank($segment = null)
    {
        $segment = base64_decode($segment);

        if($segment == null){
            $mdata = [
                'title'     => 'Banking - ' . NAMETITLE,
                'content'   => 'homepage/bank/banking',
                'map'       => 'general'
            ];
        }else if($segment == 'bank_account'){
            $mdata = [
                'title'     => 'Banking Account - ' . NAMETITLE,
                'content'   => 'homepage/bank/account',
                'map'       => 'bank_account'
            ];
        }else if($segment == 'bank_encrypted'){
            $mdata = [
                'title'     => 'Banking Encrypted - ' . NAMETITLE,
                'content'   => 'homepage/bank/encrypted',
                'map'       => 'bank_encrypted'
            ];
        }else if($segment == 'bank_visa'){
            $mdata = [
                'title'     => 'Banking Visa Debit Card - ' . NAMETITLE,
                'content'   => 'homepage/bank/visa',
                'map'       => 'bank_visa'
            ];
        }

        $mdata['navbar'] = 'relative';

        return view('homepage/layout/wrapper', $mdata);
    }

    public function crypto($segment = null)
    {
        $segment = base64_decode($segment);

        if($segment == null){
            $mdata = [
                'title'     => 'Crypto - ' . NAMETITLE,
                'content'   => 'homepage/crypto/crypto_main',
                'map'       => 'general',
                'navbar'    => 'relative'
            ];
        }else if($segment == 'crypto_noncustodial'){
            $mdata = [
                'title'     => 'Crypto Account - ' . NAMETITLE,
                'content'   => 'homepage/crypto/noncustodial',
                'map'       => 'crypto_noncustodial',
                'navbar'    => 'relative'
            ];
        }else if($segment == 'crypto_tradeoff'){
            $mdata = [
                'title'     => 'Crypto Trade Off - ' . NAMETITLE,
                'content'   => 'homepage/crypto/tradeoff',
                'map'       => 'crypto_tradeoff',
                'navbar'    => 'relative'
            ];
        }else if($segment == 'all_crypto'){
            $mdata = [
                'title'     => 'Crypto - ' . NAMETITLE,
                'content'   => 'homepage/crypto/all',
                'map'       => 'all_crypto',
                'navbar'    => 'relative'
            ];
        }else if($segment == 'satoshi_signal'){
            $mdata = [
                'title'     => 'Crypto - ' . NAMETITLE,
                'content'   => 'homepage/crypto/satoshi',
                'map'       => 'satoshi_signal'
            ];
        }

        return view('homepage/layout/wrapper', $mdata);
    }

    // Contact Booking Consultant
    public function bookingconsultation()
    {

        $service = base64_decode($_GET['service']);
        $service = explode('-', $service);
        $subject = $service[0];

        $mdata = [
            'title'     => 'Booking Consultant - ' . NAMETITLE,
            'content'   => 'homepage/contact/bookingconsultation',
            'extra'     => 'homepage/contact/js/_js_bookingconsultation',
            'subject'   => $subject
        ];

        $mdata['navbar'] = 'relative';

        return view('homepage/layout/wrapper-contactus', $mdata);
    }

    public function getSlots()
    {
        // $calendarId = 'pnglobal.usa@gmail.com';
        $calendarId = 'primary';
        $userTimeZone = $this->request->getPost('timezone');

        $availableSlots = $this->googleCalendarService->getSlotsNextDay($calendarId, $userTimeZone);

        $mdata = [
            "slot"  => $availableSlots,
            "timezone"  => $userTimeZone
        ];
        
        echo json_encode($mdata);
        die;
    }


    public function booking_summary()
    {

        // Validation Field
        $rules = $this->validate([
            'fname'     => [
                'label'     => 'Name',
                'rules'     => 'required'
            ],
            'lname'     => [
                'label'     => 'Last Name',
                'rules'     => 'required'
            ],
            'email.*'   => [
                'label'     => 'Email',
                'rules'     => 'valid_email'
            ],
            'whatsapp'  => [
                'label'     => 'Whatsapp',
                'rules'     => 'required'
            ],
            'desc'      => [
                'label'     => 'Description',
                'rules'     => 'required'
            ],
            'timezone'      => [
                'label'     => 'Timezone', 
                'rules'     => 'required'
            ],
            'schedule'      => [
                'label'     => 'Schedule', 
                'rules'     => 'required'
            ],
            'subject'      => [
                'label'     => 'Subject', 
                'rules'     => 'required'
            ],
        ]);

        // Checking Validation
        if(!$rules){
            session()->setFlashdata('failed', $this->validation->listErrors());
            return redirect()->to(base_url() . 'homepage/bookingconsultation')->withInput();
        }

        // Filter EMAIL
        $email = $this->request->getVar('email');
        $newEmail = array();
        foreach($email as $dt){
            array_push($newEmail, filter_var($dt, FILTER_VALIDATE_EMAIL));
        }

        $tempreferral = trim(htmlspecialchars($this->request->getVar('referral')));
        $_SESSION["referral"]=null;
        $referral=null;
        if (!empty($tempreferral)){
            // Call API
        $url = URLAPI . "/v1/member/get_byreferral?refcode=".$tempreferral;
            $resultReff = satoshiAdmin($url)->result;
    
    
            $referral = ($resultReff->code == 200) ? $tempreferral : null;
            $_SESSION["referral"] = ($resultReff->code == 200) ? $resultReff->message->id : null;
        }
        
        // Initial Data
        $mdata = [
            'fname'         => htmlspecialchars($this->request->getVar('fname')),
            'lname'         => htmlspecialchars($this->request->getVar('lname')),
            'whatsapp'      => htmlspecialchars($this->request->getVar('whatsapp')),
            'datetime'      => htmlspecialchars($this->request->getVar('schedule')),
            'timezone'      =>  htmlspecialchars($this->request->getVar('timezone')),
            'description'   => htmlspecialchars($this->request->getVar('desc')),
            'email'         => $newEmail,
            'subject'       => htmlspecialchars($this->request->getVar('subject')),
            'referral'      => $referral
        ];


        $this->session->set('client', $mdata);

        $views = [
            'title'     => 'Summary - ' . NAMETITLE,
            'content'   => 'homepage/contact/summary_booking',
            'extra'     => 'homepage/contact/js/_js_summary_booking', 
            'data'      => $mdata,
            'navbar'    => 'relative'
        ];

        return view('homepage/layout/wrapper-contactus', $views);

    }

    
    public function booking_proccess()
    {
        // Stripe secret key
        \Stripe\Stripe::setApiKey(SECRET_KEY); 
        $paymentMethodId = $_POST['payment_method_id'];
        if (!empty($_SESSION["referral"])){
            $amount = 25000; // Replace with the actual amount in cents (e.g., $50.00 = 5000)
        }else{
            $amount = 35000;
        }
        $currency = 'eur'; // Replace with your desired currency
        
        try {
            // Create a PaymentIntent with the payment method ID
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amount,
                'currency' => $currency,
                'payment_method' => $paymentMethodId,
                'automatic_payment_methods' => [
                    'enabled' => true,
                    'allow_redirects' => 'never', // Disable redirect-based payment methods
                ],
            ]);
            
            if ($paymentIntent->status === 'requires_confirmation') {
                $confirmedPaymentIntent = $paymentIntent->confirm();
                
                // If the payment was successful, proceed with creating the calendar event
                if ($confirmedPaymentIntent->status === 'succeeded') {
                    // Call API
                    
                    $mdata=array(
                            "email"     => $_SESSION['client']['email'][0],
                            "amount"    => $amount/100,
                            "referral"  => empty($_SESSION["referral"]) ? null : $_SESSION["referral"]
                        );
                    $url = URLAPI . "/auth/bookconsultation";
                    $resultReff = satoshiAdmin($url,json_encode($mdata))->result;

                    // Create Google Calendar
                    $calendarId = 'primary'; // Your calendar ID
                    $slot = explode("#", $_SESSION['client']['datetime']);
                    $slotStart = $slot[0];
                    $slotEnd = $slot[1];
        
                    $eventName = NAMETITLE . ' - Booking Consultation ' . $_SESSION['client']['subject'] . ' | ' . $_SESSION['client']['fname'];
                    $timezone = $_SESSION['client']['timezone'];
                    $description = '<div>
                                        <p>Fullname: '.$_SESSION['client']['fname']  . ' ' . $_SESSION['client']['lname'].'</p>
                                        <p>Whatsapp: '.$_SESSION['client']['whatsapp'].'</p>
                                        <p>Email: '.$_SESSION['client']['email'][0].'</p>
                                        <p>'.$_SESSION['client']['description'].'</p>
                                    </div>';
        
                    // Parse and format slot times back to RFC3339 for event creation
                    $slotStartDT = DateTime::createFromFormat('d-m-Y H:i:s', $slotStart, new DateTimeZone($timezone));
                    $slotEndDT = DateTime::createFromFormat('d-m-Y H:i:s', $slotEnd, new DateTimeZone($timezone));
        
                    $eventData = [
                        'summary' => $eventName,
                        'description' => $description,
                        'start' => [
                            'dateTime' => $slotStartDT->format(DateTime::RFC3339),
                            'timeZone' => $timezone,
                        ],
                        'end' => [
                            'dateTime' => $slotEndDT->format(DateTime::RFC3339),
                            'timeZone' => $timezone,
                        ],
                    ];
        
                    try {
                        //$this->googleCalendarService->createEvent($calendarId, $eventData);
        
                        // Subject
                        $subject = NAMETITLE . ' - Booking Consultation ' . $_SESSION['client']['subject'] . ' | ' . $_SESSION['client']['fname'];
        
        
                        // Assign SESSION client
                        $mdata = $_SESSION['client'];
                        //sendmail_booking($subject, $mdata);
            
                    } catch (\RuntimeException $e) {
                        session()->setFlashdata('failed', 'Failed to booking schedule: '. $e->getMessage());
                        header("Location: ". base_url() . 'homepage/bookingconsultation');
                        exit();
                    }
        
                }
            }
        }catch (\Stripe\Exception\CardException $e) {
            session()->setFlashdata('failed', 'Payment Failed: '. $e->getError()->message);
            header("Location: ". base_url() . 'homepage/bookingconsultation');
            exit();
        }
    }

    
    // Contact Form Normaly
    public function contactform()
    {
        
        $service = base64_decode($_GET['service']);
        $service = explode('-', $service);
        $subject = $service[0];

        $mdata = [
            'title'     => 'Contact Form - ' . NAMETITLE,
            'content'   => 'homepage/contact/contactform',
            'extra'     => 'homepage/contact/js/_js_contactform',
            'subject'   => $subject,
            'navbar'    => 'relative'
        ];

        return view('homepage/layout/wrapper-contactus', $mdata);
    }

    public function contactform_proccess()
    {
        // Validation Field
        $rules = $this->validate([
            'fname'     => [
                'label'     => 'Name',
                'rules'     => 'required'
            ],
            'lname'     => [
                'label'     => 'Last Name',
                'rules'     => 'required'
            ],
            'email'   => [
                'label'     => 'Email',
                'rules'     => 'valid_email'
            ],
            'whatsapp'  => [
                'label'     => 'Whatsapp',
                'rules'     => 'required'
            ],
            'desc'      => [
                'label'     => 'Description',
                'rules'     => 'required'
            ],
            'subject'      => [
                'label'     => 'Subject', 
                'rules'     => 'required'
            ],

        ]);

        // Checking Validation
        if(!$rules){
            session()->setFlashdata('failed', $this->validation->listErrors());
            return redirect()->to(base_url() . 'homepage/contactform')->withInput();
        }

        // Initial Data
        $mdata = [
            'fname'         => htmlspecialchars($this->request->getVar('fname')),
            'lname'         => htmlspecialchars($this->request->getVar('lname')),
            'whatsapp'      => htmlspecialchars($this->request->getVar('whatsapp')),
            'description'   => htmlspecialchars($this->request->getVar('desc')),
            'email'         => filter_var($this->request->getVar('email'), FILTER_VALIDATE_EMAIL)
        ];

        $tempSubject = htmlspecialchars($this->request->getVar('subject'));

        // Subject
        $subject = NAMETITLE . ' - Contact Form ' . $tempSubject . ' | ' . $mdata['fname'];

        sendmail_contactform($subject, $mdata);
    }


    public function contact_success()
    {
        $mdata = [
            'title'     => 'Contact Success - ' . NAMETITLE,
            'content'   => 'homepage/contact/contact_success',
            'navbar'    => 'relative'
        ];

        return view('homepage/layout/wrapper-contactus', $mdata);
    }

    
    // Contact Form for Get Referral
    public function contactreferral()
    {
        $mdata = [
            'title'     => 'Contact Form Referral- ' . NAMETITLE,
            'content'   => 'homepage/contact/contactreferral',
            'extra'     => 'homepage/contact/js/_js_contactreferral',
            'navbar'    => 'relative'
        ];

        return view('homepage/layout/wrapper-contactus', $mdata);
    }

    public function contactreferral_proccess()
    {
        // Validation Field
        $rules = $this->validate([
            'fname'     => [
                'label'     => 'Name',
                'rules'     => 'required'
            ],
            'lname'     => [
                'label'     => 'Last Name',
                'rules'     => 'required'
            ],
            'email'   => [
                'label'     => 'Email',
                'rules'     => 'valid_email'
            ],
            'whatsapp'  => [
                'label'     => 'Whatsapp',
                'rules'     => 'required'
            ],
            'mtongue'  => [
                'label'     => 'Mother Tongoue',
                'rules'     => 'required'
            ],
            'language'  => [
                'label'     => 'Language',
                'rules'     => 'required'
            ],
            'country'  => [
                'label'     => 'Country',
                'rules'     => 'required'
            ],
            'identity'      => [
                'label'     => 'Identity',
                'rules'     => 'uploaded[identity]|max_size[identity,20000]|mime_in[identity,application/pdf]'
            ],

        ]);

        // Checking Validation
        if(!$rules){
            session()->setFlashdata('failed', $this->validation->listErrors());
            return redirect()->to(base_url() . 'homepage/contactreferral')->withInput();
        }

        // Get File PDF
        $filePDF = $this->request->getFile('identity');
        $filePath = $filePDF->getTempName();
        $fileName = $filePDF->getClientName();

        // Initial Data
        $mdata = [
            'fname'         => htmlspecialchars($this->request->getVar('fname')),
            'lname'         => htmlspecialchars($this->request->getVar('lname')),
            'whatsapp'      => htmlspecialchars($this->request->getVar('whatsapp')),
            'email'         => filter_var($this->request->getVar('email'), FILTER_VALIDATE_EMAIL),
            'instagram'     => htmlspecialchars($this->request->getVar('instagram')),
            'tiktok'        => htmlspecialchars($this->request->getVar('tiktok')),
            'fprofile'      => htmlspecialchars($this->request->getVar('fprofile')),
            'fgroup'        => htmlspecialchars($this->request->getVar('fgroup')),
            'fpage'         => htmlspecialchars($this->request->getVar('fpage')),
            'linkedin'      => htmlspecialchars($this->request->getVar('linkedin')),
            'discord'       => htmlspecialchars($this->request->getVar('discord')),
        ];

        // Subject
        $subject = NAMETITLE . ' - Request Referral ' . $mdata['fname'];

        sendmail_referral($subject, $mdata, $filePath, $fileName);
    }

    
}
