<?php

class Pagination {
    private int $perPage;
    private int $page = 1;
    private int $offset = 0;
    private int $pages;

    public function __construct(int $totalData, int $perPage = 5)
    {
        $this->perPage = $perPage;
        $this->page = $_GET['page'] ?? $this->page;
        $this->pages = ceil($totalData / $this->perPage);
        $this->offset = ($this->page * $this->perPage) - $this->perPage;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function getPages(): int
    {
        return $this->pages;
    }
}