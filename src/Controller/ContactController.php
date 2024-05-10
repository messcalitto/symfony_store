<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('home/contact.html.twig', [
            'message' => '',
        ]);
    }

    #[Route('/contact_send', name: 'app_contact_send')]
    public function contact_send(MailerInterface $mailer, Request $request): Response
    {
        $name = $request->request->get('name');
        $from = $request->request->get('email');
        $subject = $request->request->get('subject');
        $message = $request->request->get('message');
        
        // Send email
        $email = (new Email())
            ->from($from)
            ->to('admin@mysite.com')
            ->subject($subject)
            ->text($message);
        
        $mailer->send($email);

        return $this->render('home/contact.html.twig', [
            'message' => 'Your message has been sent successfully!',
        ]);
    }
}
