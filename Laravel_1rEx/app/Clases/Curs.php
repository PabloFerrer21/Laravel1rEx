<?php
class Curs {
    //Propiedades
    private $id;
    private $sigles;
    private $nom;
    private $siglesCicles;


    //Construct

    function __construct($id, $sigles, $nom, $siglesCicles)
    {
        $this->id = $id;
        $this->sigles = $sigles;
        $this->nom = $nom;
        $this->siglesCicles = $siglesCicles;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

        /**
         * Get the value of sigles
         */
        public function getSigles()
        {
                return $this->sigles;
        }

        /**
         * Set the value of sigles
         *
         * @return  self
         */
        public function setSigles($sigles)
        {
                $this->sigles = $sigles;

                return $this;
        }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of siglesCicles
     */
    public function getSiglesCicles()
    {
        return $this->siglesCicles;
    }

    /**
     * Set the value of siglesCicles
     *
     * @return  self
     */
    public function setSiglesCicles($siglesCicles)
    {
        $this->siglesCicles = $siglesCicles;

        return $this;
    }
}

?>
