<?php

use sururulab\BrasilHelper\lib\pierophp\InscricaoEstadual;

class InscricaoEstadualTest extends PHPUnit_Framework_TestCase
{
    
    public function testInscricaoEstadualTO()
    {
        $inscricoes = [
            '294551298', '290634555', '294506055'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'TO'));
        };
    }

    public function testInscricaoEstadualSE()
    {
        $inscricoes = [
            '271412500', '270664939', '271067454'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'SE'));
        };
    }

    public function testInscricaoEstadualSP()
    {
        $inscricoes = [
            '570035020114', '635330990119', '149763658111'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'SP'));
        };
    }

    public function testInscricaoEstadualSC()
    {
        $inscricoes = [
            '250170515', '256793654', '256225362'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'SC'));
        };
    }

    public function testInscricaoEstadualPR()
    {
        $inscricoes = [
            '9035607622', '9051271103', '9068252013'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'PR'));
        };
    }

    public function testInscricaoEstadualRO()
    {
        $inscricoes = [
            '00000003645746', '00000000907669', '00000000548421'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'RO'));
        };
    }

    public function testInscricaoEstadualRS()
    {
        $inscricoes = [
            '0190068507', '0962468126', '0100166377'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'RS'));
        };
    }

    public function testInscricaoEstadualRN()
    {
        $inscricoes = [
            '200940147', '200793071', '200634810'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'RN'));
        };
    }

    public function testInscricaoEstadualRJ()
    {
        $inscricoes = [
            '80094051', '79245887', '78058269'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'RJ'));
        };
    }

    public function testInscricaoEstadualPI()
    {
        $inscricoes = [
            '012345679', '146517407', '374969620'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'PI'));
        };
    }

    public function testInscricaoEstadualPE()
    {
        $inscricoes = [
            '020132581', '008299439', '024976890'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'PE'));
        };
    }

    public function testInscricaoEstadualRR()
    {
        $inscricoes = [
            '240066281', '240017556', '240034290'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'RR'));
        };
    }

    public function testInscricaoEstadualPB()
    {
        $inscricoes = [
            '161763014', '286168987', '161630987'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'PB'));
        };
    }

    public function testInscricaoEstadualPA()
    {
        $inscricoes = [
            '152723463', '152043233', '152192115'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'PA'));
        };
    }

    public function testInscricaoEstadualMG()
    {
        $inscricoes = [
            '0623079040081', '0237213460087', '0010341190071'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'MG'));
        };
    }

    public function testInscricaoEstadualMS()
    {
        $inscricoes = [
            '283500638', '283478608', '283347562'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'MS'));
        };
    }

    public function testInscricaoEstadualMT()
    {
        $inscricoes = [
            '133601609', '135934958', '131795031'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'MT'));
        };
    }

    public function testInscricaoEstadualMA()
    {
        $inscricoes = [
            '124353959', '122263804', '121425487'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'MA'));
        };
    }

    public function testInscricaoEstadualGO()
    {
        $inscricoes = [
            '103201297', '102933782', '102815658'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'GO'));
        };
    }

    public function testInscricaoEstadualES()
    {
        $inscricoes = [
            '081488440', '080712827', '080263747'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'ES'));
        };
    }

    public function testInscricaoEstadualDF()
    {
        $inscricoes = [
            '0732872500112', '0748846700270', '0732107103527'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'DF'));
        };
    }

    public function testInscricaoEstadualCE()
    {
        $inscricoes = [
            '066794536', '069662584', '069486689'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'CE'));
        };
    }

    public function testInscricaoEstadualBA()
    {
        $inscricoes = [
            '123456748', '162345651', '75009192'

        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'BA'));
        };
    }

    public function testInscricaoEstadualAP()
    {
        $inscricoes = [
            '031728502', '031728502', '033200289'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'AP'));
        };
    }

    public function testInscricaoEstadualAM()
    {
        $inscricoes = [
            '062001990', '062000799', '062009559'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'AM'));
        };
    }

    public function testInscricaoEstadualAL()
    {
        $inscricoes = [
            '248066331', '248531972', '248983059'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'AL'));
        };
    }

    public function testInscricaoEstadualAC()
    {
        $inscricoes = [
            '0100973604545', '0171023710298', '0182158755007'
        ];

        foreach ($inscricoes as $inscricao) {
            $this->assertTrue(InscricaoEstadual::inscricao_estadual($inscricao, 'AC'));
        };
    }
    
}