<?php

declare(strict_types=1);

/*
 * This file is part of the Easyblue YouSign project.
 * (c) Easyblue <dev@easyblue.io>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Easyblue\YouSign\Model;

use Symfony\Component\Serializer\Annotation\Groups;

class ProcedureConfig
{
    #[Groups(['read'])]
    protected ?ProcedureConfigEmail $email = null;

    #[Groups(['read', 'write'])]
    protected ?ProcedureConfigWebhook $webhook = null;

    public function __construct(?ProcedureConfigEmail $email = null, ?ProcedureConfigWebhook $webhook = null)
    {
        $this->email   = $email;
        $this->webhook = $webhook;
    }

    public function getEmail(): ?ProcedureConfigEmail
    {
        return $this->email;
    }

    public function setEmail(ProcedureConfigEmail $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWebhook(): ?ProcedureConfigWebhook
    {
        return $this->webhook;
    }

    public function setWebhook(ProcedureConfigWebhook $webhook): self
    {
        $this->webhook = $webhook;

        return $this;
    }
}
