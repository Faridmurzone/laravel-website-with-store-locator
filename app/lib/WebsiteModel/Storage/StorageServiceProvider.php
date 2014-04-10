<?php namespace WebsiteModel\Storage;
 
use Illuminate\Support\ServiceProvider;
 
class StorageServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'WebsiteModel\Storage\Site\SiteRepository',
      'WebsiteModel\Storage\Site\EloquentSiteRepository'
    );
    
    $this->app->bind(
      'WebsiteModel\Storage\User\UserRepository',
      'WebsiteModel\Storage\User\EloquentUserRepository'
    );
    
    $this->app->bind(
      'WebsiteModel\Storage\Patient\PatientRepository',
      'WebsiteModel\Storage\Patient\EloquentPatientRepository'
    );
  }
 
}