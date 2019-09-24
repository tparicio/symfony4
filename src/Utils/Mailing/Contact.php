<?php


namespace App\Utils\Mailing;

use Swift_Mailer;
use Swift_Message;
use App\Entity\Contact as Message;
use Twig_Environment;

/**
 * Class Contact
 * Send mailing messages for contact module
 *
 * @package App\Utils\Mailing
 */
class Contact
{
    /**
     * @var Swift_Mailer $mailer
     */
    protected $mailer;

    /**
     * @var Twig_Environment
     */
    protected $templating;

    /**
     * @var string
     */
    protected $sender;

    /**
     * @var string
     */
    protected $bcc;

    /**
     * Contact constructor.
     * @param Swift_Mailer $mailer
     * @param Twig_Environment $templating
     * @param $sender
     * @param $bcc
     */
    public function __construct(Swift_Mailer $mailer, Twig_Environment $templating, $sender, $bcc)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->sender = $sender;
        $this->bcc = $bcc;
    }

    /**
     * @return string
     */
    public function getSender():string
    {
        return $this->sender;
    }

    /**
     * @return string
     */
    public function getBcc():string
    {
        return $this->bcc;
    }

    /**
     * @param Message $contact
     * @return mixed
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function contact(Message $contact)
    {
        $message = (new Swift_Message($contact->getSubject()))
            ->setFrom($this->getSender())
            ->setTo($contact->getEmail(), $contact->getName())
            //->setBcc($this->getBcc()) no need, configure in dev/swiftmailer.yaml
            ->setBody(
                $this->templating->render(
                    'contact/email.html.twig',
                    ['contact' => $contact]
                ),
                'text/html'
            )

            // you can remove the following code if you don't define a text version for your emails
            ->addPart(
                $this->templating->render(
                    'contact/email.txt.twig',
                    ['contact' => $contact]
                ),
                'text/plain'
            )
        ;

        return $this->mailer->send($message);
    }
}