<?php

namespace OpenSearch\Generated\GeneralSearcher;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 * @generated
 */

use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TApplicationException;

// HELPER FUNCTIONS AND STRUCTURES

class GeneralSearcherServiceProcessor
{
    protected $handler_ = null;

    public function __construct($handler)
    {
        $this->handler_ = $handler;
    }

    public function process($input, $output)
    {
        $rseqid = 0;
        $fname = null;
        $mtype = 0;

        $input->readMessageBegin($fname, $mtype, $rseqid);
        $methodname = 'process_' . $fname;
        if (!method_exists($this, $methodname)) {
            $input->skip(TType::STRUCT);
            $input->readMessageEnd();
            $x = new TApplicationException('Function ' . $fname . ' not implemented.',
                TApplicationException::UNKNOWN_METHOD);
            $output->writeMessageBegin($fname, TMessageType::EXCEPTION, $rseqid);
            $x->write($output);
            $output->writeMessageEnd();
            $output->getTransport()->flush();
            return;
        }
        $this->$methodname($rseqid, $input, $output);
        return true;
    }

}

