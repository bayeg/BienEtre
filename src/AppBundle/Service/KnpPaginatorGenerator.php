<?php

namespace AppBundle\Service;

use Knp\Component\Pager\Paginator;
use Symfony\Component\HttpFoundation\Request;


class KnpPaginatorGenerator
{
    private $knp_paginator;

    public function __construct(Paginator $knp_paginator)
    {
        $this->knp_paginator = $knp_paginator;
    }

    public function generate($items, $page, $limit, Request $request)
    {
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $result  = $this
            ->knp_paginator
            ->paginate(
                $items,
                $request->query->getInt('page',$page),
                $request->query->getInt('limit',$limit)
            );

        return $result;
    }

}