<?php
namespace OpenSearch\Generated\Common;

use Thrift\Type\TType;


class Pageable {
  static $_TSPEC;

  /**
   * @var int
   */
  public $page = null;
  /**
   * @var int
   */
  public $size = null;
  /**
   * @var int
   */
  public $start = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        10 => array(
          'var' => 'page',
          'type' => TType::I32,
          ),
        11 => array(
          'var' => 'size',
          'type' => TType::I32,
          ),
        12 => array(
          'var' => 'start',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['page'])) {
        $this->page = $vals['page'];
      }
      if (isset($vals['size'])) {
        $this->size = $vals['size'];
      }
      if (isset($vals['start'])) {
        $this->start = $vals['start'];
      }
    }
  }

  public function getName() {
    return 'Pageable';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 10:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->page);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->size);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->start);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Pageable');
    if ($this->page !== null) {
      $xfer += $output->writeFieldBegin('page', TType::I32, 10);
      $xfer += $output->writeI32($this->page);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->size !== null) {
      $xfer += $output->writeFieldBegin('size', TType::I32, 11);
      $xfer += $output->writeI32($this->size);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->start !== null) {
      $xfer += $output->writeFieldBegin('start', TType::I32, 12);
      $xfer += $output->writeI32($this->start);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}
