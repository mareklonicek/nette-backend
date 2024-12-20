<?php

declare(strict_types=1);

namespace App\UI\Api;

use Nette\Application\Responses\JsonResponse;

final class ApiPresenter extends \Nette\Application\UI\Presenter
{
    public function startup(): void
    {
        parent::startup();
        // Povolení CORS
        $this->getHttpResponse()->setHeader('Access-Control-Allow-Origin', '*');
        $this->getHttpResponse()->setHeader('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
        $this->getHttpResponse()->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }

    public function actionDefault(): void
    {
        // Mock uživatelé
        $users = [
            ['id' => 1, 'name' => 'Jan Novák', 'email' => 'jan.novak@example.com'],
            ['id' => 2, 'name' => 'Petr Svoboda', 'email' => 'petr.svoboda@example.com'],
            ['id' => 3, 'name' => 'Eva Horáková', 'email' => 'eva.horakova@example.com'],
        ];

        $this->sendResponse(new JsonResponse($users));
    }
}
