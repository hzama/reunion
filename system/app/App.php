<?php

class App {

	public $name = "Name";
	public $title = "Title";
	public $keywords = "Title";

    public $baseUrl = "";
    public $root = "";

	public $mainTemplate = "main";

	public $config = array();

	public $defaultController = "site";

    public $templateFolder =  "../preconomia.com.br/app/views/templates";
    
    public $debugger = null;

	public function __construct(){

        $this->debugger = new ErrorHandler();

        $this->loader = new Twig_Loader_Filesystem("");
        
        $this->loader->prependPath($this->templateFolder);

        $this->twig = new Twig_Environment($this->loader, array(
            //'cache' => 'cache',
        ));

	}

	public function run($config){

		$this->config = $config;
		$this->name = $this->config['app']['name'];
		$this->title = $this->config['app']['title'];
		$this->keywords = $this->config['app']['keywords'];
		$this->defaultController = $this->config['app']['defaultController'];
		
        $this->baseUrl = $this->config['app']['baseUrl'];
        $this->root = $this->config['app']['root'];
        
        $this->mainTemplate = $this->config['app']['mainTemplate'];

        $app = $this;

        $templateFolder = $this->root . "/app/views/templates/" ;

        $template = $this->mainTemplate . ".php";
        
        $this->twig->loadTemplate($template);

        $nomes = array("1" => "felipe", "2" => "donato", "3" => "marlon");

        echo $this->twig->render($template, array('nomes' => $nomes, "app" => $app, "content" => "../index.php"));

	}

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the value of name.
     *
     * @param mixed $name the name 
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the value of title.
     *
     * @param mixed $title the title 
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of keywords.
     *
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }
    
    /**
     * Sets the value of keywords.
     *
     * @param mixed $keywords the keywords 
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Gets the value of config.
     *
     * @return mixed
     */
    public function getConfig()
    {
        return $this->config;
    }
    
    /**
     * Sets the value of config.
     *
     * @param mixed $config the config 
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Gets the value of baseUrl.
     *
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }
    
    /**
     * Sets the value of baseUrl.
     *
     * @param mixed $baseUrl the base url 
     *
     * @return self
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * Gets the value of root.
     *
     * @return mixed
     */
    public function getRoot()
    {
        return $this->root;
    }
    
    /**
     * Sets the value of root.
     *
     * @param mixed $root the root 
     *
     * @return self
     */
    public function setRoot($root)
    {
        $this->root = $root;

        return $this;
    }
}