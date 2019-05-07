<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends AbstractController
{
    const EMAIL_REGEXP = "^(\S+)@([a-z0-9-]+)(\.)([a-z]{2,4})(\.?)([a-z]{0,4})+$^";

    public function checkEmail(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        if (!$data["email"]) {
            return new JsonResponse([
                'err' => 'EMAIL_REQUIRED'
            ], 400);
        }

        $email = $data["email"];

        if (!preg_match(self::EMAIL_REGEXP, $email)) {
            return new JsonResponse([
                'err' => 'EMAIL_BAD'
            ], 400);
        };

        return new JsonResponse([
            'validation' => 'true'
        ], 200);
    }
}
