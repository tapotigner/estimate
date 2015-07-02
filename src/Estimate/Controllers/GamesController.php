<?php
namespace Estimate\Controllers;

use Estimate\Dao\DaoFactory;
use Mouf\Html\HtmlElement\HtmlBlock;
use Mouf\Html\Renderer\Twig\TwigTemplate;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Mvc\Splash\Controllers\Controller;

class GamesController extends Controller {


    /**
     * The template used by this controller.
     * @var TemplateInterface
     */
    private $template;

    /**
     * The main content block of the page.
     * @var HtmlBlock
     */
    private $content;

    /**
     * The DAO factory object.
     * @var DaoFactory
     */
    private $daoFactory;

    /**
     * The Twig environment (used to render Twig templates).
     * @var \Twig_Environment
     */
    private $twig;

    /**
     * @param TemplateInterface $template
     * @param HtmlBlock $content
     * @param DaoFactory $daoFactory
     * @param \Twig_Environment $twig
     */
    public function __construct(TemplateInterface $template, HtmlBlock $content, DaoFactory $daoFactory, \Twig_Environment $twig) {
        $this->template = $template;
        $this->content = $content;
        $this->daoFactory = $daoFactory;
        $this->twig = $twig;
    }

    /**
     * @URL /
     * @URL games
     * @GET
     * @Logged
     */
    public function index() {
        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'src/views/games/index.twig', array()));
        $this->template->toHtml();
    }
}