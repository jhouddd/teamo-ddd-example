<?php
declare(strict_types=1);

namespace Teamo\Project\Application\Command\TodoList;

use Teamo\Project\Domain\Model\Project\TodoList\TodoListId;
use Teamo\Project\Domain\Model\Project\ProjectId;

class RemoveTodoListHandler extends TodoListHandler
{
    public function handle(RemoveTodoListCommand $command)
    {
        $todoList = $this->todoListRepository->ofId(new TodoListId($command->todoListId()), new ProjectId($command->projectId()));
        $this->todoListRepository->remove($todoList);
    }
}
