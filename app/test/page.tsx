"use client"
import React, { useEffect, useState } from 'react';

interface UserData {
  [key: string]: any;
}

const MyPage: React.FC = () => {
  const [data, setData] = useState(null);

  useEffect(() => {
    const lang = localStorage.getItem('lang');
    const language = lang || 'en';

    import(`../../data/${language}.json`)
      .then((importedData) => {
        console.log(importedData);
        setData(importedData);
      })
      .catch((error) => {
        console.error(error);
      });
  }, []);

  return (
    <div>
      <h1 className='mt-32'>User Information</h1>
      {data && (
        <div>
          <p>Name: {data['welcome']}</p>
          <p>Email: {data['about']}</p>
        </div>
      )}
    </div>
  );
};

export default MyPage;