<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BudgetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'amount' => $this->amount,
            'direction' => $this->direction,
            'userId' => $this->user_id,
            'categoryId' => $this->category_id,
            'periodic' => $this->periodic,
            'startDate' => $this->start_date,
            'periodId' => $this->period_id
        ];
    }
}
