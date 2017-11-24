<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 6.11.2017 г.
 * Time: 16:41
 */

namespace App\Http;


use Core\TemplateInterface;

use Core\DataBinderInterface;
abstract class HttpHandlerAbstract
{
    /**
     * @var TemplateInterface
     */
    protected $template;
    /**
     * @var DataBinderInterface
     */
    protected $dataBinder;

    public function __construct(TemplateInterface $template,DataBinderInterface $dataBinder)
    {
        $this->template = $template;
        $this->dataBinder = $dataBinder;
    }

    protected function render(string $templateName,$data=null)
    {
        $this->template->render($templateName,$data);
    }
    protected function redirect(string $url)
    {
        header("Location: $url");
        exit;
    }
}