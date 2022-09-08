 public function id()
{
$bill = Helper::IDGenerator(new Patient, 'bill_no', 4, 'NBIL'); /** Generate id */
return view('.......', compact('$bill'));
}
