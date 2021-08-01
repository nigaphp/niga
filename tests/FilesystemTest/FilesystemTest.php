<?php

use Nigatedev\Filesystem\Exceptions\FileNotFoundException;
use Nigatedev\Filesystem\Exceptions\DirNotFoundException;
use Nigatedev\Filesystem\Filesystem;
use PHPUnit\Framework\TestCase;

class FilesystemTest extends TestCase {
  
  protected $filesystem;
  
  protected function setUp(): void
  {
    $this->filesystem = new Filesystem();
  }
  
  /**
   * @test
   */
 public function isFile()
  {
    try {
      $this->filesystem->isFile("test.txt");
    } catch (FileNotFoundException  $e) {
      $this->assertEquals("Fatal error: test.txt file not found", $e->getMessage());
    }
  }
  
  /**
   * @test
   */
 public function isDir()
  {
    try {
      $this->filesystem->isDir('/fake-dir');
    } catch (DirNotFoundException  $e) {
      $this->assertEquals("Fatal error: /fake-dir directory not found", $e->getMessage());
    }
  }
}
