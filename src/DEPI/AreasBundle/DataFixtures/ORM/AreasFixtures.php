<?php

namespace DEPI\AreasBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DEPI\AreasBundle\Entity\Areas;

class AreasFixtures extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $areas = array(
            array('nombre' => 'Ingeniería Química, Polímeros, Ingeniería Ambiental, Química'),
            array('nombre' => 'Ciencias de la Computación'),
            array('nombre' => 'Ingeniería Bioquímica, Ciencias de los Alimentos'),
            array('nombre' => 'Ciencias Agropecuarias, Ciencias del Mar'),
            array('nombre' => 'Ingeniería Eléctrica, Ingeniería Electrónica'),
            array('nombre' => 'Administración, Planificación, Desarrollo Regional, Ingeniería Administrativa, Ingeniería Industrial'),
            array('nombre' => 'Ingeniería Mecánica, Ingeniería Mecatrónica, Metalurgia, Materiales')
        );

        foreach ($areas as $area) {
            $entidad = new Areas();
            $entidad->setNombre($area['nombre']);
            $manager->persist($entidad);
        }
        
        $manager->flush();
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}