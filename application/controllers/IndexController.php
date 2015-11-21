<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        $this->getFrontController()->throwExceptions(true);
        
    }

    public function indexAction()
    {
        $this->view->assign('title', "Start Your Trial");
    }
    
    public function pstartAction()
    {
    	$params = $this->getRequest()->getParams();
    	 
    	$session = new Zend_Session_Namespace('trial');
    	 
    	$session->onecminpx = $params['1cminpx'];
    	$session->height = $params['h1height'];
    	$session->userid = $params['userid'];
    	 
    	$this->view->assign('size', $this->getPixelLength(50));
    	$this->view->assign('line', $this->getPixelLength(35));
    	$this->view->assign('trial', 1);
    	 
    	$this->view->assign('nextpage', 'ppage2');
    	$this->view->assign('title', 'Practice Test 1');
    	
    	$this->render('start');
    	 
    }
    
    public function ppage2Action()
    {
    	$this->view->assign('orig', $this->getPixelLength(35));
    	$this->view->assign('size', $this->getPixelLength(100));

    	
    	$session = new Zend_Session_Namespace('trial');
    	$height = intval($session->height);
    	
    	$this->view->assign('nextpage', 'ppage3');
    	$this->view->assign('buttontext', 'Practice Test 2');
    	$this->view->assign('title', 'Practice Test 1');
    	$this->view->assign('height', $height);
    	$this->view->assign('trial', 1);
    	
    	$this->render('page2');
    }
    
    public function ppage3Action()
    {
    	$params = $this->getRequest()->getParams();
    
    	$session = new Zend_Session_Namespace('trial');
  		$session->ptrial1 = $params['usrline'];  
    
    	$this->view->assign('size', $this->getPixelLength(70));
    	$this->view->assign('line', $this->getPixelLength(65));
    	$this->view->assign('trial', 1);
    
    	$this->view->assign('nextpage', 'ppage4');
    	$this->view->assign('title', 'Practice Test 2');
    	
    	$this->render('start');
    
    }
    
    public function ppage4Action()
    {
    	$this->view->assign('orig', $this->getPixelLength(65));
    	$this->view->assign('size', $this->getPixelLength(140));
    
    	 
    	$session = new Zend_Session_Namespace('trial');
    	$height = intval($session->height);
    	 
    	$this->view->assign('nextpage', 'start');
    	$this->view->assign('buttontext', 'Start Test');
    	$this->view->assign('title', 'Practice Test 2');
    	$this->view->assign('height', $height);
    	$this->view->assign('trial', 1);
    	
    	$this->render('page2');
    }
    
    
    public function startAction()
    {    	
    	$session = new Zend_Session_Namespace('trial');
    		
    	$this->view->assign('size', $this->getPixelLength(81));
    	$this->view->assign('line', $this->getPixelLength(68));
    	
    	$params = $this->getRequest()->getParams();
    	
    	$session = new Zend_Session_Namespace('trial');
    	$session->ptrial2 = $params['usrline'];
    	
    	$this->view->assign('nextpage', 'page2');
    	$this->view->assign('title', 'Test 1');
    	
    }
    
    public function page2Action()
    {
    	$this->view->assign('orig', $this->getPixelLength(68));
    	$this->view->assign('size', $this->getPixelLength(162));
    	
    	$session = new Zend_Session_Namespace('trial');
    	$height = intval($session->height);
    	
    	$this->view->assign('nextpage', 'page3');
    	$this->view->assign('buttontext', 'Next Trial');
    	$this->view->assign('title', 'Test 1');
    	$this->view->assign('height', $height);
    	
    }
    
    public function page3Action()
    {
    	$this->view->assign('size', $this->getPixelLength(141)); //108
    	$this->view->assign('line', $this->getPixelLength(90)); //22
    	
    	$params = $this->getRequest()->getParams();
    	$session = new Zend_Session_Namespace('trial');
    	$session->trial1 = $params['usrline'];
    	
    	$this->view->assign('nextpage', 'page4');
    	$this->view->assign('title', 'Test 2');
    	
    	$this->render('start');
    }
    
    public function page4Action()
    {
    	$this->view->assign('orig', $this->getPixelLength(90)); //22
    	$this->view->assign('size', $this->getPixelLength(102)); //162
    	 
    	$this->view->assign('nextpage', 'page5');
    	
    	$session = new Zend_Session_Namespace('trial');
    	$height = intval($session->height);
    	
    	$this->view->assign('buttontext', 'Next Trial');
    	$this->view->assign('title', 'Test 2');
    	$this->view->assign('height', $height);
    	
    	$this->render('page2');
    	
    	
    	
    }
    
    public function page5Action()
    {
    	$this->view->assign('size', $this->getPixelLength(101));
    	$this->view->assign('line', $this->getPixelLength(28));
    	
    	$params = $this->getRequest()->getParams();
    	$session = new Zend_Session_Namespace('trial');
    	$session->trial2 = $params['usrline'];
    	 
    	
    	$this->view->assign('nextpage', 'page6');
    	$this->view->assign('title', 'Test 3');
    	
    	$this->render('start');
    }
    
    public function page6Action()
    {
    	$this->view->assign('orig', $this->getPixelLength(28));
    	$this->view->assign('size', $this->getPixelLength(141));
    	 
    	$this->view->assign('nextpage', 'page7');
    	
    	$session = new Zend_Session_Namespace('trial');
    	$height = intval($session->height);
    	
    	$this->view->assign('buttontext', 'Next Trial');
    	$this->view->assign('title', 'Test 3');
    	$this->view->assign('height', $height);
    	
    	$this->render('page2');
    	
    }
    
    public function page7Action()
    {
    	$this->view->assign('size', $this->getPixelLength(108)); //141
    	$this->view->assign('line', $this->getPixelLength(22)); //90
    	
    	$params = $this->getRequest()->getParams();
    	$session = new Zend_Session_Namespace('trial');
    	$session->trial3 = $params['usrline'];
    	 
    	
    	$this->view->assign('nextpage', 'page8');
    	$this->view->assign('title', 'Test 4');
    	
    	$this->render('start');
    }
    
    public function page8Action()
    {
    	$this->view->assign('orig', $this->getPixelLength(22)); //90
    	$this->view->assign('size', $this->getPixelLength(162)); //102
    	 
    	$this->view->assign('nextpage', 'page9');
    	
    	$session = new Zend_Session_Namespace('trial');
    	$height = intval($session->height);
    	
    	$this->view->assign('buttontext', 'Next Trial');
    	$this->view->assign('title', 'Test 4');
    	$this->view->assign('height', $height);
    	
    	$this->render('page2');
    }
    
    public function page9Action()
    {
    	$this->view->assign('size', $this->getPixelLength(108));
    	$this->view->assign('line', $this->getPixelLength(73));
    	
    	$params = $this->getRequest()->getParams();
    	$session = new Zend_Session_Namespace('trial');
    	$session->trial4 = $params['usrline'];
    	 
    	
    	$this->view->assign('nextpage', 'page10');
    	$this->view->assign('title', 'Test 5');
    	
    	$this->render('start');
    }
    
    public function page10Action()
    {
    	$this->view->assign('orig', $this->getPixelLength(73));
    	$this->view->assign('size', $this->getPixelLength(81));
    	 
    	$this->view->assign('nextpage', 'page11');
    	
    	$session = new Zend_Session_Namespace('trial');
    	$height = intval($session->height);
    	
    	$this->view->assign('buttontext', 'Next Trial');
    	$this->view->assign('title', 'Test 5');
    	$this->view->assign('height', $height);
    	
    	$this->render('page2');
    }
    
    public function page11Action()
    {
    	$this->view->assign('size', $this->getPixelLength(162));
    	$this->view->assign('line', $this->getPixelLength(30));
    	
    	$params = $this->getRequest()->getParams();
    	$session = new Zend_Session_Namespace('trial');
    	$session->trial5 = $params['usrline'];
    	 
    	
    	$this->view->assign('nextpage', 'page12');
    	$this->view->assign('title', 'Test 6');
    	
    	$this->render('start');
    }
    
    public function page12Action()
    {
    	$this->view->assign('orig', $this->getPixelLength(30));
    	$this->view->assign('size', $this->getPixelLength(81));
    	 
    	$this->view->assign('nextpage', 'finish');
    	
    	$session = new Zend_Session_Namespace('trial');
    	$height = intval($session->height);
    	
    	$this->view->assign('buttontext', 'Finish');
    	$this->view->assign('title', 'Test 6');
    	$this->view->assign('height', $height);
    	
    	$this->render('page2');
    }
    
    public function finishAction()
    {
    	$params = $this->getRequest()->getParams();
    	$session = new Zend_Session_Namespace('trial');
    	$session->trial6 = $params['usrline'];
    	
    	$dadp = new Application_Model_Data();
    	
    	$dinsert = array(
    			'userid' => $session->userid,
    			'ipaddr' => $_SERVER['REMOTE_ADDR'],
    			'ptrial1sys' => $this->getPixelLength(35),
    			'ptrial1usr' => $session->ptrial1,
    			'ptrial2sys' => $this->getPixelLength(65),
    			'ptrial2usr' => $session->ptrial2,
    			'trial1sys' => $this->getPixelLength(68),
    			'trial1usr' => $session->trial1,
    			'trial2sys' => $this->getPixelLength(90),
    			'trial2usr' => $session->trial2,
    			'trial3sys' => $this->getPixelLength(28),
    			'trial3usr' => $session->trial3,
    			'trial4sys' => $this->getPixelLength(22),
    			'trial4usr' => $session->trial4,
    			'trial5sys' => $this->getPixelLength(73),
    			'trial5usr' => $session->trial5,
    			'trial6sys' => $this->getPixelLength(30),
    			'trial6usr' => $session->trial6,
    			'created_date' => new Zend_Db_Expr("NOW()")
    			);
    	
    	$dadp->insert($dinsert);
    	
    	$data = array(
    			'userid' => $session->userid,
    			'ptrial1sys' => $this->getPixelLength(35),
    			'ptrial1usr' => $session->ptrial1,
    			'ptrial2sys' => $this->getPixelLength(65),
    			'ptrial2usr' => $session->ptrial2,
    			'sysline1' => $this->getPixelLength(68),
    			'usrline1' => $session->trial1,
    			'sysline2' => $this->getPixelLength(90),
    			'usrline2' => $session->trial2,
    			'sysline3' => $this->getPixelLength(28),
    			'usrline3' => $session->trial3,
    			'sysline4' => $this->getPixelLength(22),
    			'usrline4' => $session->trial4,
    			'sysline5' => $this->getPixelLength(73),
    			'usrline5' => $session->trial5,
    			'sysline6' => $this->getPixelLength(30),
    			'usrline6' => $session->trial6,
    			);
    	
    	$this->view->assign('data', $data);
    	
    }
    
    private function getPixelLength($mm) 
    {
    	$session = new Zend_Session_Namespace('trial');
    	
    	$cm = $mm / 10;
    	
    	return $cm * $session->onecminpx;
    }

    public function dataAction()
    {
    	
    }
    
    public function downloadAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	$this->_helper->layout()->disableLayout();
    	
    	$dadp = new Application_Model_Data();
    	
    	$datas = $dadp->fetchAll();
    	
    	$header = array('Trial #', 'User Id', 'Ip Addr', 
    			    'Practice 1 System', 'Practice 1 User',
    				'Practice 2 System', 'Practice 2 User',    			 
    				'Trial 1 System', 'Trial 1 User', 
    				'Trial 2 System', 'Trial 2 User', 
    				'Trial 3 System', 'Trial 3 User', 
    				'Trial 4 System', 'Trial 4 User', 
    				'Trial 5 System', 'Trial 5 User',
    				'Trial 6 System', 'Trial 6 User', 'Created Date Time');
    	
    	$fp = fopen("/tmp/datadownload.csv", "w");
    	fputcsv($fp, $header, ",", '"');
    	
    	foreach ($datas as $data) {
    		fputcsv($fp, $data->toArray(), ",", '"');
    	}
    	
    	fclose($fp);
    	
    	
    	
    	$fdata = file_get_contents("/tmp/datadownload.csv");
    	
    	$this->getResponse()->setHeader('Content-Type', 'text/csv');
		$this->getResponse()->setHeader('Content-Disposition', 'attachment; filename="TestData.csv"');
		
    	echo $fdata;
    	
    }

}

