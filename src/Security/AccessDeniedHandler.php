<?php
// src/Security/AccessDeniedHandler.php
namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?RedirectResponse
    {
        // ...
        // return new Response(
        //     '<html><body>Access denied</body></html>'
        // );
       
        // return $this->redirectToRoute('app_access_denied');
        return new RedirectResponse('/access_denied');

        return $this->redirectToRoute('home');

        // $content = 
        //          '<html><body><br><br><center>You don\'t have permission to access this page.</center></body></html>';
             

        // return $this->redirectToRoute('app_login');

        return new Response($content, 403);
    }
}