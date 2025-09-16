<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

#[Route("envoyer-mail")]
final class MailController extends AbstractController {

    #[Route("envoyer-mail", name: "app_email")]
    public function sendMail(MailerInterface $mailer): Response {
        
        $email = (new Email())
            ->from("dev@fr.com")
            ->to("dev@test.com")
            ->subject("Hello world")
            ->text("it's a test mail")
            ->html("<h1>Titre</h1>");

        $mailer->send($email);
        
        return new Response("Email a été envoyé");
    }
}