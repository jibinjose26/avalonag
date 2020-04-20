<?php


class Home_controllerTest extends PHPUnit_Framework_TestCase
{

	public function testValidation()
	{
		$this->load->library('upload');
	}

	public function testEdit()
	{

	}

	public function testImage_view()
	{

	}

	public function testDashboard()
	{

	}

	public function testLogout()
	{

	}

	public function testDelete()
	{

	}

	public function testDashboardpage()
	{

	}

	public function testIndex()
	{
		$output = $this->testDashboard('GET', '/');
		$output = $this->testDashboard('GET', 'home_manage/index');

	}

	public function testHome_manage()
	{

	}

	public function test__construct()
	{

	}

	public function testUpdatehome()
	{

	}
}
