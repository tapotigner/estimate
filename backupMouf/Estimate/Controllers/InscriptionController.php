<?php
namespace Estimate\Controllers;

use Estimate\Dao\DaoFactory;
use Mouf\Html\HtmlElement\HtmlBlock;
use Mouf\Html\Renderer\Twig\TwigTemplate;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Mvc\Splash\Controllers\Controller;

class InscriptionController extends Controller {

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
     * @URL inscription
     */
    public function index() {
        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'src/views/inscription/index.twig', array()));
        $this->template->toHtml();
    }

    /**
     * @URL inscription/inscription
     * @GET
     */
    public function inscription($login, $password) {
        $result = array("success" => true, "message" => "OK");
        $user = $this->daoFactory->getUserDao()->getUserByLogin($login);
        if ($user) {
            $result["message"] = "Ce login existe déjà. Veuillez en choisir un autre";
            $result["success"] = false;
        } else {
            $user = $this->daoFactory->getUserDao()->create();
            $user->setLogin($login);
            $user->setPassword(sha1($password));
            $user->save();
        }
        header("Location: ".ROOT_URL);
        echo json_encode($result);
    }
}