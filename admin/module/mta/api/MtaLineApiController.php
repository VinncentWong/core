<?php
class MtaLineApiController extends CoreApi {
  public function getLines() {
    $lineService = new LineService();
    try {
      $lines = $lineService->getLines();
      CoreResult::instance($lines)->json();
    } catch(Exception $e) {
      CoreError::instance($e->getMessage())->show();
    }
  }

  public function getLine($id) {
    $lineService = new LineService();
    try {
      $line = $lineService->getLine($id);
      CoreResult::instance($line)->json();
    } catch(Exception $e) {
      CoreError::instance($e->getMessage())->show();
    }
  }

  public function saveLine() {
    $idline = $this->postv('idline');
    $line = json_decode($this->postv('line', "[]"));
    $lineService = new LineService();
    try {
      $result = $lineService->saveLine($idline, $line);
      CoreResult::instance($result)->json();
    } catch(Exception $e) {
      CoreError::instance($e->getMessage())->show();
    }
  }
}