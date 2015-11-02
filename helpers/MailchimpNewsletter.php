<?php 

require_once( 'Mailchimp/Mailchimp.php' );



class MailchimpNewsletter {

    /**
     * @var Mailchimp
     */
    protected $mailchimp;

    protected $list = [
        'SonnSolar' => 'd76e6fe356',

    ];

    function __construct()
    {
        $this->mailchimp = new Mailchimp('a44e45fd08455fb46363d45d4411b6ef-us2');
    }


    /**
     * @param $listName
     * @param $email
     * @param $fname
     * @param $lname
     * @return mixed
     */
    public function subscribeTo($listName, $email, $fname, $lname)
    {
       return $this->mailchimp->lists->subscribe(
            $this->list[$listName],
            ['email'=> $email],
            ['FNAME'=> $fname,'LNAME'=> $lname], // merge vars
            'html', //email type
            false, // require double opt in?
            true //update existing customers
       );
    }

    /**
     * @param $listName
     * @param $email
     * @return mixed
     */
    public function unsubscribeFrom($listName, $email)
    {
        return $this->mailchimp->lists->subscribe(
            $this->list[$listName],
            ['email'=> $email],
            false, // delete the member permanently
            false, // send goodbye email?
            false // send unsubscribe notification email?

        );
    }


}