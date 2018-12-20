<?php

class about {
  private $name;
  private $photo;
  private $email;
  private $phone;
  private $site;
  private $post;

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @return mixed
   */
  public function getPhoto()
  {
    return $this->photo;
  }

  /**
   * @return mixed
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @return mixed
   */
  public function getPhone()
  {
    return $this->phone;
  }

  /**
   * @return mixed
   */
  public function getSite()
  {
    return $this->site;
  }

  /**
   * @return mixed
   */
  public function getPost()
  {
    return $this->post;
  }
  /**
   * about constructor.
   * @param $name
   * @param $photo
   * @param $email
   * @param $phone
   * @param $site
   * @param $post
   */
  public function __construct($name, $photo, $email, $phone, $site, $post)
  {
    $this->name = $name;
    $this->photo = $photo;
    $this->email = $email;
    $this->phone = $phone;
    $this->site = $site;
    $this->post = $post;
  }
}


class profile
{
  private $about;
  private $educations=[];
  private $languages=[];
  private $interest=[];
//  private $career;

  /**
   * @param array $interest
   */
  public function setInterest(array $interest): void
  {
    $this->interest = $interest;
  }

  /**
   * @return array
   */
  public function getInterest(): array
  {
    return $this->interest;
  }
  /**
   * @return array
   */
  public function getLanguages(): array
  {
    return $this->languages;
  }

  /**
   * @return array
   */
  public function getEducations()
  {
    return $this->educations;
  }

  /**
   * profile constructor.
   * @param $about
   */
  public function __construct(about $about)
  {
    $this->about = $about;
  }

  public function addEducation( $education){
    $this->educations[] = $education;
  }
  public function addLanguage( $language){
    $this->languages[] = $language;
  }

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->about->getName();
  }

  /**
   * @return mixed
   */
  public function getPhoto()
  {
    return $this->about->getPhoto();
  }

  /**
   * @return mixed
   */
  public function getEmail()
  {
    return $this->about->getEmail();
  }

  /**
   * @return mixed
   */
  public function getPhone()
  {
    return $this->about->getPhone();
  }

  /**
   * @return mixed
   */
  public function getSite()
  {
    return $this->about->getSite();
  }

  /**
   * @return mixed
   */
  public function getPost()
  {
    return $this->about->getPost();
  }

}

class education {
  private $title;
  private $speciality;
  private $yearStart;
  private $yearEnd;

  /**
   * @return mixed
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * @return mixed
   */
  public function getSpeciality()
  {
    return $this->speciality;
  }
  /**
   * @return mixed
   */
  public function getYearStart()
  {
    return $this->yearStart;
  }
  /**
   * @return mixed
   */
  public function getYearEnd()
  {
    return $this->yearEnd;
  }
  /**
   * education constructor.
   * @param $title
   * @param $speciality
   * @param $yearStart
   * @param $yearEnd
   */
  public function __construct($title, $speciality, $yearStart, $yearEnd)
  {
    $this->title = $title;
    $this->speciality = $speciality;
    $this->yearStart = $yearStart;
    $this->yearEnd = $yearEnd;
  }

}


class language {
  private $title;
  private $level;

  /**
   * @return mixed
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * @return mixed
   */
  public function getLevel()
  {
    return $this->level;
  }

  /**
   * language constructor.
   * @param $title
   * @param $level
   */
  public function __construct($title, $level)
  {
    $this->title = $title;
    $this->level = $level;
  }

}



