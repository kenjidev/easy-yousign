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
use Symfony\Component\Serializer\Annotation\SerializedName;

class ProcedureConfigEmail
{
    public const PROCEDURE_STARTED  = 'procedure.started';
    public const PROCEDURE_FINISHED = 'procedure.finished';
    public const PROCEDURE_REFUSED  = 'procedure.refused';
    public const PROCEDURE_EXPIRED  = 'procedure.expired';
    public const PROCEDURE_DELETED  = 'procedure.deleted';
    public const MEMBER_STARTED     = 'member.started';
    public const MEMBER_FINISHED    = 'member.finished';
    public const COMMENT_CREATED    = 'comment.created';

    #[Groups(['read', 'write'])]
    #[SerializedName('procedure.started')]
    protected array $procedureStartedEmails = [];

    #[Groups(['read', 'write'])]
    #[SerializedName('procedure.finished')]
    protected array $procedureFinishedEmails = [];

    #[Groups(['read', 'write'])]
    #[SerializedName('procedure.refused')]
    protected array $procedureRefusedEmails = [];

    #[Groups(['read', 'write'])]
    #[SerializedName('procedure.expired')]
    protected array $procedureExpiredEmails = [];

    #[Groups(['read', 'write'])]
    #[SerializedName('procedure.deleted')]
    protected array $procedureDeletedEmails = [];

    #[Groups(['read', 'write'])]
    #[SerializedName('member.finished')]
    protected array $memberFinishedEmails = [];

    #[Groups(['read', 'write'])]
    #[SerializedName('comment.created')]
    protected array $commentCreatedEmails = [];

    /**
     * @return Email[]
     */
    public function getProcedureStartedEmails(): array
    {
        return $this->procedureStartedEmails;
    }

    /**
     * @param Email[]|null $procedureStartedEmails
     */
    public function setProcedureStartedEmails(?array $procedureStartedEmails): self
    {
        $this->procedureStartedEmails = $procedureStartedEmails ?? [];

        return $this;
    }

    public function addProcedureStartedEmail(Email $procedureStartedEmail): self
    {
        $this->procedureStartedEmails[] = $procedureStartedEmail;

        return $this;
    }

    /**
     * @return Email[]
     */
    public function getProcedureFinishedEmails(): array
    {
        return $this->procedureFinishedEmails;
    }

    /**
     * @param Email[]|null $procedureFinishedEmails
     */
    public function setProcedureFinishedEmails(?array $procedureFinishedEmails): self
    {
        $this->procedureFinishedEmails = $procedureFinishedEmails ?? [];

        return $this;
    }

    public function addProcedureFinishedEmails(Email $procedureFinishedEmail): self
    {
        $this->procedureFinishedEmails[] = $procedureFinishedEmail;

        return $this;
    }

    /**
     * @return Email[]
     */
    public function getProcedureRefusedEmails(): array
    {
        return $this->procedureRefusedEmails;
    }

    /**
     * @param Email[]|null $procedureRefusedEmails
     */
    public function setProcedureRefusedEmails(?array $procedureRefusedEmails): self
    {
        $this->procedureRefusedEmails = $procedureRefusedEmails ?? [];

        return $this;
    }

    public function addProcedureRefusedEmails(Email $procedureRefusedEmail): self
    {
        $this->procedureRefusedEmails[] = $procedureRefusedEmail;

        return $this;
    }

    /**
     * @return Email[]
     */
    public function getProcedureExpiredEmails(): array
    {
        return $this->procedureExpiredEmails;
    }

    /**
     * @param Email[]|null $procedureExpiredEmails
     */
    public function setProcedureExpiredEmails(?array $procedureExpiredEmails): self
    {
        $this->procedureExpiredEmails = $procedureExpiredEmails ?? [];

        return $this;
    }

    public function addProcedureExpiredEmails(Email $procedureExpiredEmail): self
    {
        $this->procedureExpiredEmails[] = $procedureExpiredEmail;

        return $this;
    }

    /**
     * @return Email[]
     */
    public function getProcedureDeletedEmails(): array
    {
        return $this->procedureDeletedEmails;
    }

    /**
     * @param Email[]|null $procedureDeletedEmails
     */
    public function setProcedureDeletedEmails(?array $procedureDeletedEmails): self
    {
        $this->procedureDeletedEmails = $procedureDeletedEmails ?? [];

        return $this;
    }

    public function addProcedureDeletedEmails(Email $procedureDeletedEmail): self
    {
        $this->procedureDeletedEmails[] = $procedureDeletedEmail;

        return $this;
    }

    /**
     * @return Email[]
     */
    public function getMemberFinishedEmails(): array
    {
        return $this->memberFinishedEmails;
    }

    /**
     * @param Email[]|null $memberFinishedEmails
     */
    public function setMemberFinishedEmails(?array $memberFinishedEmails): self
    {
        $this->memberFinishedEmails = $memberFinishedEmails ?? [];

        return $this;
    }

    public function addMemberFinishedEmails(Email $memberFinishedEmail): self
    {
        $this->memberFinishedEmails[] = $memberFinishedEmail;

        return $this;
    }

    /**
     * @return Email[]
     */
    public function getCommentCreatedEmails(): array
    {
        return $this->commentCreatedEmails;
    }

    /**
     * @param Email[]|null $commentCreatedEmails
     */
    public function setCommentCreatedEmails(?array $commentCreatedEmails): self
    {
        $this->commentCreatedEmails = $commentCreatedEmails ?? [];

        return $this;
    }

    public function addCommentCreatedEmails(Email $commentCreatedEmail): self
    {
        $this->commentCreatedEmails[] = $commentCreatedEmail;

        return $this;
    }
}
