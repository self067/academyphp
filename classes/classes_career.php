<?php


class career {
  private $about;
  private $experiences=[];
  private $projects=[];
  private $skills=[];

  /**
   * @return mixed
   */
  public function getAbout()
  {
    return $this->about;
  }

  /**
   * @return array
   */
  public function getSkills(): array
  {
    return $this->skills;
  }

  /**
   * @return array
   */
  public function getExperiences(): array
  {
    return $this->experiences;
  }

  /**
   * @return array
   */
  public function getProjects(): array
  {
    return $this->projects;
  }


  /**
   * career constructor.
   * @param $about

   */
  public function __construct($about)
  {
    $this->about = $about;
//  $this->experiences = $experiences;
  }

  public function addExperience($experience)
  {
    $this->experiences[] = $experience;
  }

  public function addProject($project)
  {
    $this->projects[] = $project;
  }
  public function addSkill($skill)
  {
    $this->skills[] = $skill;
  }


}


class experiences {
  private $title;
  private $post;
  private $city;
  private $company;
  private $about;
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
  public function getPost()
  {
    return $this->post;
  }

  /**
   * @return mixed
   */
  public function getCity()
  {
    return $this->city;
  }

  /**
   * @return mixed
   */
  public function getCompany()
  {
    return $this->company;
  }

  /**
   * @return mixed
   */
  public function getAbout()
  {
    return $this->about;
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

  /*
   * experiences constructor.
   */
  public function __construct($title, $post, $city, $company, $about, $yearStart, $yearEnd)
  {
    $this->title = $title;
    $this->post = $post;
    $this->city = $city;
    $this->company = $company;
    $this->about = $about;
    $this->yearStart = $yearStart;
    $this->yearEnd = $yearEnd;
  }


}

class projects {
  private $title;
  private $link;
  private $about;

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
  public function getLink()
  {
    return $this->link;
  }

  /**
   * @return mixed
   */
  public function getAbout()
  {
    return $this->about;
  }

  /**
   * projects constructor.
   * @param $title
   * @param $link
   * @param $about
   */
  public function __construct($title, $link, $about)
  {
    $this->title = $title;
    $this->link = $link;
    $this->about = $about;
  }

}

class skills {
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
   * skills constructor.
   * @param $title
   * @param $level
   */
  public function __construct($title, $level)
  {
    $this->title = $title;
    $this->level = $level;
  }

}

