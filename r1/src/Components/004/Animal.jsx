function Animal({ type , animalColor}) {

   // if (type === "Racoon") {
  //      return (
  //          <div>
  //              <h1>RACOON</h1>
  //          </div>
  //      )
  //  } else if(type === "Cat") {
  //      return (
  //          <div>
  //              <h1>CAT</h1>
 //           </div>
 //       )
  //  } else {
  //      return (
  //          <div>
  //              <h1>ANIMAL</h1>
 //           </div>
 //  );
 //}
//}
return (
    <div>
        <h1 style={{
            color: animalColor,
            fontFamily: 'monospace',
            letterSpacing: '15px',
            }}>
            {
                type === 'Racoon'
                    ?
                    'RACOON'
                    :
                    type === 'Cat'
                        ?
                        'CAT'
                        :
                        'ANIMAL'
            }
        </h1>
    </div>
);
}
export default Animal