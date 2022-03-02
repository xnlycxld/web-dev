PROGRAM SarahRevere(INPUT, OUTPUT);
USES 
  Dos;
VAR
  QueryString: STRING;
BEGIN{Sarah}
   WRITELN('Content-Type: text/plain');
   WRITELN;
   QueryString:= GetEnv('QUERY_STRING');
   IF QueryString = ('lanterns=1')
   THEN
      WRITELN('The British are coming by land')
   ELSE
     IF QueryString = ('lanterns=2')
     THEN
       WRITELN('The British are coming by sea')
     ELSE
       WRITELN('Sarah didn''t say')
END.{Sarah}
