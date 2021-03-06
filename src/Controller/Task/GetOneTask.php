<?php

namespace App\Controller\Task;

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Get One Task Controller.
 */
class GetOneTask extends BaseTask
{
    /**
     * Get one task by id.
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return Response
     */
    public function __invoke($request, $response, $args)
    {
        $this->setParams($request, $response, $args);
        $task = $this->getTaskService()->getTask($this->args['id']);

        return $this->jsonResponse('success', $task, 200);
    }
}
