<?php
declare(strict_types=1);

namespace CleanPHP\Invoicer\Domain\Factory;

use CleanPHP\Invoicer\Domain\Entity\Invoice;
use CleanPHP\Invoicer\Domain\Entity\Order;

/**
 * Interface InvoiceFactory
 * @package CleanPHP\Invoicer\Domain\Factory
 */
class InvoiceFactory
{
    public function createFromOrder(Order $order): Invoice
    {
        $invoice =  new Invoice();
        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new \DateTime());
        $invoice->setTotal($order->getTotal());
        return $invoice;
    }
}