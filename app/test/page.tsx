"use client"
import React from 'react';
import { useLanguageData } from '@/data/languageLoader';

const MyPage: React.FC = () => {
  const data = useLanguageData();

  return (
    <div>
      <h1 className='mt-32'>User Information</h1>
      {data && (
        <div>
          <p>Name: {data['welcomeText']}</p>
          <p>Email: {data['imprint']}</p>
        </div>
      )}
    </div>
  );
};

export default MyPage;