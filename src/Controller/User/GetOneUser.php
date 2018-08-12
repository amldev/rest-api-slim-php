<?php

namespace App\Controller\User;

use App\Controller\BaseController;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Get One User Controller.
 */
class GetOneUser extends BaseUser
{
    /**
     * Get one user by id.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function __invoke($request, $response, $args)
    {
//        $this->setParams($request, $response, $args);
//        $result = $this->getUserService()->getUser($this->args['id']);
//
//        return $this->jsonResponse('success', $result, 200);
        
        
        $this->setParams($request, $response, $args);
        $client = new \Predis\Client();
        $key = 'api-rest-slimphp:user:'.$this->args['id'];
        $value = $client->get($key);
        if (!is_null($value)) {
            $result = json_decode($value);
        } else {
            $result = $this->getUserService()->getUser($this->args['id']);
            $client->set($key, json_encode($result));
        }

        return $this->jsonResponse('success', $result, 200);
        
        $this->setParams($request, $response, $args);
        $result = [
            'status' => 'OK',
        ];
        $result = $this->getUserService()->getUser($this->args['id']);
//        return $response->withJson($status, 200, JSON_PRETTY_PRINT);
        return $this->jsonResponse('success', $result, 200);
    }
}
