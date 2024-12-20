<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette;

use Nette\Application\Responses\JsonResponse;


final class HomePresenter extends Nette\Application\UI\Presenter
{
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
