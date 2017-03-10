<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Ciqual ressource Entity.
 *
 * @ApiResource(
 *    attributes={
 *      "filters"={"ciqual.search", "ciqual.search.name"}
 *    },
 *    itemOperations={
 *      "get"={"method"="GET", "path"="/cirqual/{ORIGFDCD}"}
 *    }
 *
 * )
 * @ORM\Entity
 */
class Ciqual
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Something else
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $ORIGGPCD;

    /**
     * @var string ingredient cat
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $ORIGGPFR;

    /**
     * @var string ingredient hash
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $ORIGFDCD;

    /**
     * @var string ingredient name
     *
     * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank
     */
    private $ORIGFDNM;

    /**
     * @var string Règlement UE N° 1169/2011 (kJ/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Energie;

    /**
     * @var string Energie, N x facteur Jones, avec fibres  (kJ/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Energie2;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Eau;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Proteines;

    /**
     * @var string protein N x 6.25 (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Proteines_brutes;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Glucides;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Lipides;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Sucres;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Amidon;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Fibres_alimentaires;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Polyols_totaux;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Cendres;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Alcool;

    /**
     * @var string water (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Acides_organiques;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG_satures;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG_monoinsatures;

    /**
     * @var string AG_polyinsatures (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG_polyinsatures;

    /**
     * @var string AG40_butyrique (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG40_butyrique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG60_caproique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG80_caprylique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG100_caprique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG120_laurique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG140_myristique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG160_palmitique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG180_stearique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG1819c_oleique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG1829c_linoleique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG183c9_alpha_linolenique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG2045c_arachidonique;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG2055c_EPA;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $AG2264c_DHA;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Cholesterol;

    /**
     * @var string (g/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Sel_chlorure_sodium;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Calcium;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Chlorure;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Cuivre;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Fer;

    /**
     * @var string (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Iode;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Magnesium;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Manganese;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Phosphore;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Potassium;

    /**
     * @var string (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Selenium;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Sodium;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Zinc;

    /**
     * @var string; (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Retinol;

    /**
     * @var string (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $Beta_Carotene;

    /**
     * @var string (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineD;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineE;

    /**
     * @var string (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineK1;

    /**
     * @var string (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineK2;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineC;

    /**
     * @var string ou Thiamine (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineB1;

    /**
     * @var string ou Riboflavine (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineB2;

    /**
     * @var string ou PP ou Niacine (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineB3;

    /**
     * @var string ou Acide pantothenique (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineB5;

    /**
     * @var string (mg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineB6;

    /**
     * @var string ou Folates totaux (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineB9;

    /**
     * @var string (µg/100g)
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $VitamineB12;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set oRIGGPCD.
     *
     * @param string $oRIGGPCD
     *
     * @return Ciqual
     */
    public function setORIGGPCD($oRIGGPCD)
    {
        $this->ORIGGPCD = $oRIGGPCD;

        return $this;
    }

    /**
     * Get oRIGGPCD.
     *
     * @return string
     */
    public function getORIGGPCD()
    {
        return $this->ORIGGPCD;
    }

    /**
     * Set oRIGGPFR.
     *
     * @param string $oRIGGPFR
     *
     * @return Ciqual
     */
    public function setORIGGPFR($oRIGGPFR)
    {
        $this->ORIGGPFR = $oRIGGPFR;

        return $this;
    }

    /**
     * Get oRIGGPFR.
     *
     * @return string
     */
    public function getORIGGPFR()
    {
        return $this->ORIGGPFR;
    }

    /**
     * Set oRIGFDCD.
     *
     * @param string $oRIGFDCD
     *
     * @return Ciqual
     */
    public function setORIGFDCD($oRIGFDCD)
    {
        $this->ORIGFDCD = $oRIGFDCD;

        return $this;
    }

    /**
     * Get oRIGFDCD.
     *
     * @return string
     */
    public function getORIGFDCD()
    {
        return $this->ORIGFDCD;
    }

    /**
     * Set oRIGFDNM.
     *
     * @param string $oRIGFDNM
     *
     * @return Ciqual
     */
    public function setORIGFDNM($oRIGFDNM)
    {
        $this->ORIGFDNM = $oRIGFDNM;

        return $this;
    }

    /**
     * Get oRIGFDNM.
     *
     * @return string
     */
    public function getORIGFDNM()
    {
        return $this->ORIGFDNM;
    }

    /**
     * Set energie.
     *
     * @param string $energie
     *
     * @return Ciqual
     */
    public function setEnergie($energie)
    {
        $this->Energie = $energie;

        return $this;
    }

    /**
     * Get energie.
     *
     * @return string
     */
    public function getEnergie()
    {
        return $this->Energie;
    }

    /**
     * Set energie2.
     *
     * @param string $energie2
     *
     * @return Ciqual
     */
    public function setEnergie2($energie2)
    {
        $this->Energie2 = $energie2;

        return $this;
    }

    /**
     * Get energie2.
     *
     * @return string
     */
    public function getEnergie2()
    {
        return $this->Energie2;
    }

    /**
     * Set eau.
     *
     * @param string $eau
     *
     * @return Ciqual
     */
    public function setEau($eau)
    {
        $this->Eau = $eau;

        return $this;
    }

    /**
     * Get eau.
     *
     * @return string
     */
    public function getEau()
    {
        return $this->Eau;
    }

    /**
     * Set proteines.
     *
     * @param string $proteines
     *
     * @return Ciqual
     */
    public function setProteines($proteines)
    {
        $this->Proteines = $proteines;

        return $this;
    }

    /**
     * Get proteines.
     *
     * @return string
     */
    public function getProteines()
    {
        return $this->Proteines;
    }

    /**
     * Set proteinesBrutes.
     *
     * @param string $proteinesBrutes
     *
     * @return Ciqual
     */
    public function setProteinesBrutes($proteinesBrutes)
    {
        $this->Proteines_brutes = $proteinesBrutes;

        return $this;
    }

    /**
     * Get proteinesBrutes.
     *
     * @return string
     */
    public function getProteinesBrutes()
    {
        return $this->Proteines_brutes;
    }

    /**
     * Set glucides.
     *
     * @param string $glucides
     *
     * @return Ciqual
     */
    public function setGlucides($glucides)
    {
        $this->Glucides = $glucides;

        return $this;
    }

    /**
     * Get glucides.
     *
     * @return string
     */
    public function getGlucides()
    {
        return $this->Glucides;
    }

    /**
     * Set lipides.
     *
     * @param string $lipides
     *
     * @return Ciqual
     */
    public function setLipides($lipides)
    {
        $this->Lipides = $lipides;

        return $this;
    }

    /**
     * Get lipides.
     *
     * @return string
     */
    public function getLipides()
    {
        return $this->Lipides;
    }

    /**
     * Set sucres.
     *
     * @param string $sucres
     *
     * @return Ciqual
     */
    public function setSucres($sucres)
    {
        $this->Sucres = $sucres;

        return $this;
    }

    /**
     * Get sucres.
     *
     * @return string
     */
    public function getSucres()
    {
        return $this->Sucres;
    }

    /**
     * Set amidon.
     *
     * @param string $amidon
     *
     * @return Ciqual
     */
    public function setAmidon($amidon)
    {
        $this->Amidon = $amidon;

        return $this;
    }

    /**
     * Get amidon.
     *
     * @return string
     */
    public function getAmidon()
    {
        return $this->Amidon;
    }

    /**
     * Set fibresAlimentaires.
     *
     * @param string $fibresAlimentaires
     *
     * @return Ciqual
     */
    public function setFibresAlimentaires($fibresAlimentaires)
    {
        $this->Fibres_alimentaires = $fibresAlimentaires;

        return $this;
    }

    /**
     * Get fibresAlimentaires.
     *
     * @return string
     */
    public function getFibresAlimentaires()
    {
        return $this->Fibres_alimentaires;
    }

    /**
     * Set polyolsTotaux.
     *
     * @param string $polyolsTotaux
     *
     * @return Ciqual
     */
    public function setPolyolsTotaux($polyolsTotaux)
    {
        $this->Polyols_totaux = $polyolsTotaux;

        return $this;
    }

    /**
     * Get polyolsTotaux.
     *
     * @return string
     */
    public function getPolyolsTotaux()
    {
        return $this->Polyols_totaux;
    }

    /**
     * Set cendres.
     *
     * @param string $cendres
     *
     * @return Ciqual
     */
    public function setCendres($cendres)
    {
        $this->Cendres = $cendres;

        return $this;
    }

    /**
     * Get cendres.
     *
     * @return string
     */
    public function getCendres()
    {
        return $this->Cendres;
    }

    /**
     * Set alcool.
     *
     * @param string $alcool
     *
     * @return Ciqual
     */
    public function setAlcool($alcool)
    {
        $this->Alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool.
     *
     * @return string
     */
    public function getAlcool()
    {
        return $this->Alcool;
    }

    /**
     * Set acidesOrganiques.
     *
     * @param string $acidesOrganiques
     *
     * @return Ciqual
     */
    public function setAcidesOrganiques($acidesOrganiques)
    {
        $this->Acides_organiques = $acidesOrganiques;

        return $this;
    }

    /**
     * Get acidesOrganiques.
     *
     * @return string
     */
    public function getAcidesOrganiques()
    {
        return $this->Acides_organiques;
    }

    /**
     * Set aGSatures.
     *
     * @param string $aGSatures
     *
     * @return Ciqual
     */
    public function setAGSatures($aGSatures)
    {
        $this->AG_satures = $aGSatures;

        return $this;
    }

    /**
     * Get aGSatures.
     *
     * @return string
     */
    public function getAGSatures()
    {
        return $this->AG_satures;
    }

    /**
     * Set aGMonoinsatures.
     *
     * @param string $aGMonoinsatures
     *
     * @return Ciqual
     */
    public function setAGMonoinsatures($aGMonoinsatures)
    {
        $this->AG_monoinsatures = $aGMonoinsatures;

        return $this;
    }

    /**
     * Get aGMonoinsatures.
     *
     * @return string
     */
    public function getAGMonoinsatures()
    {
        return $this->AG_monoinsatures;
    }

    /**
     * Set aGPolyinsatures.
     *
     * @param string $aGPolyinsatures
     *
     * @return Ciqual
     */
    public function setAGPolyinsatures($aGPolyinsatures)
    {
        $this->AG_polyinsatures = $aGPolyinsatures;

        return $this;
    }

    /**
     * Get aGPolyinsatures.
     *
     * @return string
     */
    public function getAGPolyinsatures()
    {
        return $this->AG_polyinsatures;
    }

    /**
     * Set aG40Butyrique.
     *
     * @param string $aG40Butyrique
     *
     * @return Ciqual
     */
    public function setAG40Butyrique($aG40Butyrique)
    {
        $this->AG40_butyrique = $aG40Butyrique;

        return $this;
    }

    /**
     * Get aG40Butyrique.
     *
     * @return string
     */
    public function getAG40Butyrique()
    {
        return $this->AG40_butyrique;
    }

    /**
     * Set aG60Caproique.
     *
     * @param string $aG60Caproique
     *
     * @return Ciqual
     */
    public function setAG60Caproique($aG60Caproique)
    {
        $this->AG60_caproique = $aG60Caproique;

        return $this;
    }

    /**
     * Get aG60Caproique.
     *
     * @return string
     */
    public function getAG60Caproique()
    {
        return $this->AG60_caproique;
    }

    /**
     * Set aG80Caprylique.
     *
     * @param string $aG80Caprylique
     *
     * @return Ciqual
     */
    public function setAG80Caprylique($aG80Caprylique)
    {
        $this->AG80_caprylique = $aG80Caprylique;

        return $this;
    }

    /**
     * Get aG80Caprylique.
     *
     * @return string
     */
    public function getAG80Caprylique()
    {
        return $this->AG80_caprylique;
    }

    /**
     * Set aG100Caprique.
     *
     * @param string $aG100Caprique
     *
     * @return Ciqual
     */
    public function setAG100Caprique($aG100Caprique)
    {
        $this->AG100_caprique = $aG100Caprique;

        return $this;
    }

    /**
     * Get aG100Caprique.
     *
     * @return string
     */
    public function getAG100Caprique()
    {
        return $this->AG100_caprique;
    }

    /**
     * Set aG120Laurique.
     *
     * @param string $aG120Laurique
     *
     * @return Ciqual
     */
    public function setAG120Laurique($aG120Laurique)
    {
        $this->AG120_laurique = $aG120Laurique;

        return $this;
    }

    /**
     * Get aG120Laurique.
     *
     * @return string
     */
    public function getAG120Laurique()
    {
        return $this->AG120_laurique;
    }

    /**
     * Set aG140Myristique.
     *
     * @param string $aG140Myristique
     *
     * @return Ciqual
     */
    public function setAG140Myristique($aG140Myristique)
    {
        $this->AG140_myristique = $aG140Myristique;

        return $this;
    }

    /**
     * Get aG140Myristique.
     *
     * @return string
     */
    public function getAG140Myristique()
    {
        return $this->AG140_myristique;
    }

    /**
     * Set aG160Palmitique.
     *
     * @param string $aG160Palmitique
     *
     * @return Ciqual
     */
    public function setAG160Palmitique($aG160Palmitique)
    {
        $this->AG160_palmitique = $aG160Palmitique;

        return $this;
    }

    /**
     * Get aG160Palmitique.
     *
     * @return string
     */
    public function getAG160Palmitique()
    {
        return $this->AG160_palmitique;
    }

    /**
     * Set aG180Stearique.
     *
     * @param string $aG180Stearique
     *
     * @return Ciqual
     */
    public function setAG180Stearique($aG180Stearique)
    {
        $this->AG180_stearique = $aG180Stearique;

        return $this;
    }

    /**
     * Get aG180Stearique.
     *
     * @return string
     */
    public function getAG180Stearique()
    {
        return $this->AG180_stearique;
    }

    /**
     * Set aG1819cOleique.
     *
     * @param string $aG1819cOleique
     *
     * @return Ciqual
     */
    public function setAG1819cOleique($aG1819cOleique)
    {
        $this->AG1819c_oleique = $aG1819cOleique;

        return $this;
    }

    /**
     * Get aG1819cOleique.
     *
     * @return string
     */
    public function getAG1819cOleique()
    {
        return $this->AG1819c_oleique;
    }

    /**
     * Set aG1829cLinoleique.
     *
     * @param string $aG1829cLinoleique
     *
     * @return Ciqual
     */
    public function setAG1829cLinoleique($aG1829cLinoleique)
    {
        $this->AG1829c_linoleique = $aG1829cLinoleique;

        return $this;
    }

    /**
     * Get aG1829cLinoleique.
     *
     * @return string
     */
    public function getAG1829cLinoleique()
    {
        return $this->AG1829c_linoleique;
    }

    /**
     * Set aG183c9AlphaLinolenique.
     *
     * @param string $aG183c9AlphaLinolenique
     *
     * @return Ciqual
     */
    public function setAG183c9AlphaLinolenique($aG183c9AlphaLinolenique)
    {
        $this->AG183c9_alpha_linolenique = $aG183c9AlphaLinolenique;

        return $this;
    }

    /**
     * Get aG183c9AlphaLinolenique.
     *
     * @return string
     */
    public function getAG183c9AlphaLinolenique()
    {
        return $this->AG183c9_alpha_linolenique;
    }

    /**
     * Set aG2045cArachidonique.
     *
     * @param string $aG2045cArachidonique
     *
     * @return Ciqual
     */
    public function setAG2045cArachidonique($aG2045cArachidonique)
    {
        $this->AG2045c_arachidonique = $aG2045cArachidonique;

        return $this;
    }

    /**
     * Get aG2045cArachidonique.
     *
     * @return string
     */
    public function getAG2045cArachidonique()
    {
        return $this->AG2045c_arachidonique;
    }

    /**
     * Set aG2055cEPA.
     *
     * @param string $aG2055cEPA
     *
     * @return Ciqual
     */
    public function setAG2055cEPA($aG2055cEPA)
    {
        $this->AG2055c_EPA = $aG2055cEPA;

        return $this;
    }

    /**
     * Get aG2055cEPA.
     *
     * @return string
     */
    public function getAG2055cEPA()
    {
        return $this->AG2055c_EPA;
    }

    /**
     * Set aG2264cDHA.
     *
     * @param string $aG2264cDHA
     *
     * @return Ciqual
     */
    public function setAG2264cDHA($aG2264cDHA)
    {
        $this->AG2264c_DHA = $aG2264cDHA;

        return $this;
    }

    /**
     * Get aG2264cDHA.
     *
     * @return string
     */
    public function getAG2264cDHA()
    {
        return $this->AG2264c_DHA;
    }

    /**
     * Set cholesterol.
     *
     * @param string $cholesterol
     *
     * @return Ciqual
     */
    public function setCholesterol($cholesterol)
    {
        $this->Cholesterol = $cholesterol;

        return $this;
    }

    /**
     * Get cholesterol.
     *
     * @return string
     */
    public function getCholesterol()
    {
        return $this->Cholesterol;
    }

    /**
     * Set selChlorureSodium.
     *
     * @param string $selChlorureSodium
     *
     * @return Ciqual
     */
    public function setSelChlorureSodium($selChlorureSodium)
    {
        $this->Sel_chlorure_sodium = $selChlorureSodium;

        return $this;
    }

    /**
     * Get selChlorureSodium.
     *
     * @return string
     */
    public function getSelChlorureSodium()
    {
        return $this->Sel_chlorure_sodium;
    }

    /**
     * Set calcium.
     *
     * @param string $calcium
     *
     * @return Ciqual
     */
    public function setCalcium($calcium)
    {
        $this->Calcium = $calcium;

        return $this;
    }

    /**
     * Get calcium.
     *
     * @return string
     */
    public function getCalcium()
    {
        return $this->Calcium;
    }

    /**
     * Set chlorure.
     *
     * @param string $chlorure
     *
     * @return Ciqual
     */
    public function setChlorure($chlorure)
    {
        $this->Chlorure = $chlorure;

        return $this;
    }

    /**
     * Get chlorure.
     *
     * @return string
     */
    public function getChlorure()
    {
        return $this->Chlorure;
    }

    /**
     * Set cuivre.
     *
     * @param string $cuivre
     *
     * @return Ciqual
     */
    public function setCuivre($cuivre)
    {
        $this->Cuivre = $cuivre;

        return $this;
    }

    /**
     * Get cuivre.
     *
     * @return string
     */
    public function getCuivre()
    {
        return $this->Cuivre;
    }

    /**
     * Set fer.
     *
     * @param string $fer
     *
     * @return Ciqual
     */
    public function setFer($fer)
    {
        $this->Fer = $fer;

        return $this;
    }

    /**
     * Get fer.
     *
     * @return string
     */
    public function getFer()
    {
        return $this->Fer;
    }

    /**
     * Set iode.
     *
     * @param string $iode
     *
     * @return Ciqual
     */
    public function setIode($iode)
    {
        $this->Iode = $iode;

        return $this;
    }

    /**
     * Get iode.
     *
     * @return string
     */
    public function getIode()
    {
        return $this->Iode;
    }

    /**
     * Set magnesium.
     *
     * @param string $magnesium
     *
     * @return Ciqual
     */
    public function setMagnesium($magnesium)
    {
        $this->Magnesium = $magnesium;

        return $this;
    }

    /**
     * Get magnesium.
     *
     * @return string
     */
    public function getMagnesium()
    {
        return $this->Magnesium;
    }

    /**
     * Set manganese.
     *
     * @param string $manganese
     *
     * @return Ciqual
     */
    public function setManganese($manganese)
    {
        $this->Manganese = $manganese;

        return $this;
    }

    /**
     * Get manganese.
     *
     * @return string
     */
    public function getManganese()
    {
        return $this->Manganese;
    }

    /**
     * Set phosphore.
     *
     * @param string $phosphore
     *
     * @return Ciqual
     */
    public function setPhosphore($phosphore)
    {
        $this->Phosphore = $phosphore;

        return $this;
    }

    /**
     * Get phosphore.
     *
     * @return string
     */
    public function getPhosphore()
    {
        return $this->Phosphore;
    }

    /**
     * Set potassium.
     *
     * @param string $potassium
     *
     * @return Ciqual
     */
    public function setPotassium($potassium)
    {
        $this->Potassium = $potassium;

        return $this;
    }

    /**
     * Get potassium.
     *
     * @return string
     */
    public function getPotassium()
    {
        return $this->Potassium;
    }

    /**
     * Set selenium.
     *
     * @param string $selenium
     *
     * @return Ciqual
     */
    public function setSelenium($selenium)
    {
        $this->Selenium = $selenium;

        return $this;
    }

    /**
     * Get selenium.
     *
     * @return string
     */
    public function getSelenium()
    {
        return $this->Selenium;
    }

    /**
     * Set sodium.
     *
     * @param string $sodium
     *
     * @return Ciqual
     */
    public function setSodium($sodium)
    {
        $this->Sodium = $sodium;

        return $this;
    }

    /**
     * Get sodium.
     *
     * @return string
     */
    public function getSodium()
    {
        return $this->Sodium;
    }

    /**
     * Set zinc.
     *
     * @param string $zinc
     *
     * @return Ciqual
     */
    public function setZinc($zinc)
    {
        $this->Zinc = $zinc;

        return $this;
    }

    /**
     * Get zinc.
     *
     * @return string
     */
    public function getZinc()
    {
        return $this->Zinc;
    }

    /**
     * Set retinol.
     *
     * @param string $retinol
     *
     * @return Ciqual
     */
    public function setRetinol($retinol)
    {
        $this->Retinol = $retinol;

        return $this;
    }

    /**
     * Get retinol.
     *
     * @return string
     */
    public function getRetinol()
    {
        return $this->Retinol;
    }

    /**
     * Set betaCarotene.
     *
     * @param string $betaCarotene
     *
     * @return Ciqual
     */
    public function setBetaCarotene($betaCarotene)
    {
        $this->Beta_Carotene = $betaCarotene;

        return $this;
    }

    /**
     * Get betaCarotene.
     *
     * @return string
     */
    public function getBetaCarotene()
    {
        return $this->Beta_Carotene;
    }

    /**
     * Set vitamineD.
     *
     * @param string $vitamineD
     *
     * @return Ciqual
     */
    public function setVitamineD($vitamineD)
    {
        $this->VitamineD = $vitamineD;

        return $this;
    }

    /**
     * Get vitamineD.
     *
     * @return string
     */
    public function getVitamineD()
    {
        return $this->VitamineD;
    }

    /**
     * Set vitamineE.
     *
     * @param string $vitamineE
     *
     * @return Ciqual
     */
    public function setVitamineE($vitamineE)
    {
        $this->VitamineE = $vitamineE;

        return $this;
    }

    /**
     * Get vitamineE.
     *
     * @return string
     */
    public function getVitamineE()
    {
        return $this->VitamineE;
    }

    /**
     * Set vitamineK1.
     *
     * @param string $vitamineK1
     *
     * @return Ciqual
     */
    public function setVitamineK1($vitamineK1)
    {
        $this->VitamineK1 = $vitamineK1;

        return $this;
    }

    /**
     * Get vitamineK1.
     *
     * @return string
     */
    public function getVitamineK1()
    {
        return $this->VitamineK1;
    }

    /**
     * Set vitamineK2.
     *
     * @param string $vitamineK2
     *
     * @return Ciqual
     */
    public function setVitamineK2($vitamineK2)
    {
        $this->VitamineK2 = $vitamineK2;

        return $this;
    }

    /**
     * Get vitamineK2.
     *
     * @return string
     */
    public function getVitamineK2()
    {
        return $this->VitamineK2;
    }

    /**
     * Set vitamineC.
     *
     * @param string $vitamineC
     *
     * @return Ciqual
     */
    public function setVitamineC($vitamineC)
    {
        $this->VitamineC = $vitamineC;

        return $this;
    }

    /**
     * Get vitamineC.
     *
     * @return string
     */
    public function getVitamineC()
    {
        return $this->VitamineC;
    }

    /**
     * Set vitamineB1.
     *
     * @param string $vitamineB1
     *
     * @return Ciqual
     */
    public function setVitamineB1($vitamineB1)
    {
        $this->VitamineB1 = $vitamineB1;

        return $this;
    }

    /**
     * Get vitamineB1.
     *
     * @return string
     */
    public function getVitamineB1()
    {
        return $this->VitamineB1;
    }

    /**
     * Set vitamineB2.
     *
     * @param string $vitamineB2
     *
     * @return Ciqual
     */
    public function setVitamineB2($vitamineB2)
    {
        $this->VitamineB2 = $vitamineB2;

        return $this;
    }

    /**
     * Get vitamineB2.
     *
     * @return string
     */
    public function getVitamineB2()
    {
        return $this->VitamineB2;
    }

    /**
     * Set vitamineB3.
     *
     * @param string $vitamineB3
     *
     * @return Ciqual
     */
    public function setVitamineB3($vitamineB3)
    {
        $this->VitamineB3 = $vitamineB3;

        return $this;
    }

    /**
     * Get vitamineB3.
     *
     * @return string
     */
    public function getVitamineB3()
    {
        return $this->VitamineB3;
    }

    /**
     * Set vitamineB5.
     *
     * @param string $vitamineB5
     *
     * @return Ciqual
     */
    public function setVitamineB5($vitamineB5)
    {
        $this->VitamineB5 = $vitamineB5;

        return $this;
    }

    /**
     * Get vitamineB5.
     *
     * @return string
     */
    public function getVitamineB5()
    {
        return $this->VitamineB5;
    }

    /**
     * Set vitamineB6.
     *
     * @param string $vitamineB6
     *
     * @return Ciqual
     */
    public function setVitamineB6($vitamineB6)
    {
        $this->VitamineB6 = $vitamineB6;

        return $this;
    }

    /**
     * Get vitamineB6.
     *
     * @return string
     */
    public function getVitamineB6()
    {
        return $this->VitamineB6;
    }

    /**
     * Set vitamineB9.
     *
     * @param string $vitamineB9
     *
     * @return Ciqual
     */
    public function setVitamineB9($vitamineB9)
    {
        $this->VitamineB9 = $vitamineB9;

        return $this;
    }

    /**
     * Get vitamineB9.
     *
     * @return string
     */
    public function getVitamineB9()
    {
        return $this->VitamineB9;
    }

    /**
     * Set vitamineB12.
     *
     * @param string $vitamineB12
     *
     * @return Ciqual
     */
    public function setVitamineB12($vitamineB12)
    {
        $this->VitamineB12 = $vitamineB12;

        return $this;
    }

    /**
     * Get vitamineB12.
     *
     * @return string
     */
    public function getVitamineB12()
    {
        return $this->VitamineB12;
    }
}
