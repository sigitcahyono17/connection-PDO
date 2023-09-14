<?php
class Pagination {
    public int $perPage;
    private int $currentPage = 1;
    public int $offset = 0;
    private int $pages;
    
    public function __construct(int $totalData, int $perPage = 5)
    {
        $this->perPage = $perPage;
        $this->currentPage =  $_GET['page'] ?? 1;
        $this->offset = ($this->currentPage * $this->perPage) - $this->perPage;
        $this->pages = ceil($totalData / $this->perPage);
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