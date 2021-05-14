<?php

namespace OpenSearch\Generated\Suggestion;

use Thrift\Type\TType;
use Thrift\Exception\TProtocolException;

// HELPER FUNCTIONS AND STRUCTURES

class SuggestionService_execute_args
{
    static $_TSPEC;

    /**
     * @var \OpenSearch\Generated\Suggestion\SuggestParams
     */
    public $suggestParams = null;

    public function __construct($vals = null)
    {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = [
                1 => [
                    'var' => 'suggestParams',
                    'type' => TType::STRUCT,
                    'class' => '\OpenSearch\Generated\Suggestion\SuggestParams',
                ],
            ];
        }
        if (is_array($vals)) {
            if (isset($vals['suggestParams'])) {
                $this->suggestParams = $vals['suggestParams'];
            }
        }
    }

    public function getName()
    {
        return 'SuggestionService_execute_args';
    }

    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->suggestParams = new \OpenSearch\Generated\Suggestion\SuggestParams();
                        $xfer += $this->suggestParams->read($input);
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('SuggestionService_execute_args');
        if ($this->suggestParams !== null) {
            if (!is_object($this->suggestParams)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('suggestParams', TType::STRUCT, 1);
            $xfer += $this->suggestParams->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }

}
