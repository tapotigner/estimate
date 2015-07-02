<?php
/*
 * This file has been automatically generated by TDBM.
 * DO NOT edit this file, as it might be overwritten.
 */
namespace Estimate\Dao;
		
/**
 * The DaoFactory provides an easy access to all DAOs generated by TDBM.
 *
 * @Component
 */
class DaoFactory 
{
	/**
	 * @var QuestionsRangeDao
	 */
	private $questionsRangeDao;

	/**
	 * Returns an instance of the QuestionsRangeDao class.
	 * 
	 * @return QuestionsRangeDao
	 */
	public function getQuestionsRangeDao() {
		return $this->questionsRangeDao;
	}
	
	/**
	 * Sets the instance of the QuestionsRangeDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param QuestionsRangeDao $questionsRangeDao
	 */
	public function setQuestionsRangeDao(QuestionsRangeDao $questionsRangeDao) {
		$this->questionsRangeDao = $questionsRangeDao;
	}
	
	/**
	 * @var UserDao
	 */
	private $userDao;

	/**
	 * Returns an instance of the UserDao class.
	 * 
	 * @return UserDao
	 */
	public function getUserDao() {
		return $this->userDao;
	}
	
	/**
	 * Sets the instance of the UserDao class that will be returned by the factory getter.
	 * 
	 * @Property
	 * @Compulsory
	 * @param UserDao $userDao
	 */
	public function setUserDao(UserDao $userDao) {
		$this->userDao = $userDao;
	}
	

}
?>