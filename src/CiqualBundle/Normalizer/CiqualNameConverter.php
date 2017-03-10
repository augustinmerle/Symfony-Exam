<?php
namespace CiqualBundle\Normalizer;

use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

class CiqualNameConverter implements NameConverterInterface
{
    private $fields = array(
        'ORIGGPCD' => 'ORIGGPCD',
        'ORIGGPFR' => 'ORIGGPFR',
        'ORIGFDCD' => 'ORIGFDCD',
        'ORIGFDNM' => 'ORIGFDNM',
        'Energie, Règlement UE N° 1169/2011 (kJ/100g)' => 'Energie',
      //  'Energie, Règlement UE N° 1169/2011 (kcal/100g)' => '',
        'Energie, N x facteur Jones, avec fibres  (kJ/100g)' => 'Energie2',
    //    'Energie, N x facteur Jones, avec fibres  (kcal/100g)' => '',
        'Eau (g/100g)' => 'Eau',
        'Protéines (g/100g)' => 'Proteine',
        'Protéines brutes, N x 6.25 (g/100g)' => 'Proteines_brutes',
        'Glucides (g/100g)' => 'Glucides',
        'Lipides (g/100g)' => 'Lipides',
        'Sucres (g/100g)' => 'Sucres',
        'Amidon (g/100g)' => 'Amidon',
        'Fibres alimentaires (g/100g)' => 'Fibres_alimentaires',
        'Polyols totaux (g/100g)' => 'Polyols_totaux',
        'Cendres (g/100g)' => 'Cendres',
        'Alcool (g/100g)' => 'Alcool',
        'Acides organiques (g/100g)' => 'Acides_organiques',
        'AG saturés (g/100g)' => 'AG_satures',
      /*  'AG monoinsaturés (g/100g)' => '',
        'AG polyinsaturés (g/100g)' => '',
        'AG 4:0, butyrique (g/100g)' => '',
        'AG 6:0, caproïque (g/100g)' => '',
        'AG 8:0, caprylique (g/100g)' => '',
        'AG 10:0, caprique (g/100g)' => '',
        'AG 12:0, laurique (g/100g)' => '',
        'AG 14:0, myristique (g/100g)' => '',
        'AG 16:0, palmitique (g/100g)' => '',
        'AG 18:0, stéarique (g/100g)' => '',
        'AG 18:1 9c (n-9), oléique (g/100g)' => '',
        'AG 18:2 9c,12c (n-6), linoléique (g/100g)' => '',
        'AG 18:3 c9,c12,c15 (n-3), alpha-linolénique (g/100g)' => '',
        'AG 20:4 5c,8c,11c,14c (n-6), arachidonique (g/100g)' => '',
        'AG 20:5 5c,8c,11c,14c,17c (n-3) EPA (g/100g)' => '',
        'AG 22:6 4c,7c,10c,13c,16c,19c (n-3) DHA (g/100g)' => '',
        'Cholestérol (mg/100g)' => '',
        'Sel chlorure de sodium (g/100g)' => '',
        'Calcium (mg/100g)' => '',
        'Chlorure (mg/100g)' => '',
        'Cuivre (mg/100g)' => '',
        'Fer (mg/100g)' => '',
        'Iode (µg/100g)' => '',
        'Magnésium (mg/100g)' => '',
        'Manganèse (mg/100g)' => '',
        'Phosphore (mg/100g)' => '',
        'Potassium (mg/100g)' => '',
        'Sélénium (µg/100g)' => '',
        'Sodium (mg/100g)' => '',
        'Zinc (mg/100g)' => '',
        'Rétinol (µg/100g)' => '',
        'Beta-Carotène (µg/100g)' => '',
        'Vitamine D (µg/100g)' => '',
        'Vitamine E (mg/100g)' => '',
        'Vitamine K1 (µg/100g)' => '',
        'Vitamine K2 (µg/100g)' => '',
        'Vitamine C (mg/100g)' => '',
        'Vitamine B1 ou Thiamine (mg/100g)' => '',
        'Vitamine B2 ou Riboflavine (mg/100g)' => '',
        'Vitamine B3 ou PP ou Niacine (mg/100g)' => '',
        'Vitamine B5 ou Acide pantothénique (mg/100g)' => '',
        'Vitamine B6 (mg/100g)' => '',
        'Vitamine B9 ou Folates totaux (µg/100g)' => '',
        'Vitamine B12 (µg/100g)' => ''*/
      );

    /**
     * @var array|null
     */
    private $attributes;


    /**
     * @param null|array $attributes     The list of attributes to rename or null for all attributes
     */
    public function __construct(array $attributes = null, $lowerCamelCase = true)
    {
        $this->attributes = $attributes;
    }


    public function normalize($propertyName)
    {
        return $propertyName;
    }

    public function denormalize($propertyName)
    {
        // remove org_ prefix
        return array_key_exists($propertyName,$this->fields)? $this->fields[$propertyName]:$propertyName;
    }
}
