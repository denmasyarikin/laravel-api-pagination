<?php

namespace ElemenX\ApiPagination\Bridges;

use Illuminate\Pagination\LengthAwarePaginator as Laravel;

class LengthAwarePaginator extends Laravel
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'data' => $this->items->toArray(),
            'meta' => [
                'limit' => intval($this->perPage()),
                'pages' => $this->lastPage(),
                'page' => $this->currentPage(),
                'total' => $this->total()
            ]
        ];
    }
}