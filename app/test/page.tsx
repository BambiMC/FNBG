"use client"
import React, { useEffect, useState } from 'react';
import jsonData from '../../data/data.json';


const MyPage: React.FC = () => {
  const [userData, setUserData] = useState<{ name: string; email: string } | null>(null);

  useEffect(() => {
    setUserData(jsonData);
  }, []);

  return (
    <div>
      <h1 className='mt-32'>User Information</h1>
      {userData && (
        <div>
          <p>Name: {userData.name}</p>
          <p>Email: {userData.email}</p>
        </div>
      )}
    </div>
  );
};

export default MyPage;